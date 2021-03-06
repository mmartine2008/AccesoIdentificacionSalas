<?php

require_once('Model.php');
require_once(BASE_SERVER.'/app/config/config.php');

class SalasModel extends Model {

    function __construct()
    {
        global $config;
        
        $this->db = $this->create_connection($config['majen']);
    }

    /**
     * @return array
     * Retorna todas las tareas almacenadas en la tabla task
     */
    function getMesasEventos() {

        $query = $this->db->prepare('SELECT * FROM sala 
                        WHERE es_sala_mesa_examen = \'N\'
                        ORDER BY fecha, hora, nombre');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getMesasExamen() {

        $query = $this->db->prepare('
                        SELECT 
                            * 
                        FROM vw_salas_mesas 
                        ORDER BY horas');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getOne($id) {

        $query = $this->db->prepare('SELECT * FROM sala WHERE id = ?');

        $query->execute([$id]);
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result[0];
    }   
    
    function yaAcreditado($sala_id, $documento) {
        $sql = 'SELECT COUNT(*) AS cantidad FROM acreditaciones WHERE sala_id = ? AND documento = ?';
        $query = $this->db->prepare($sql);

        $query->execute([$sala_id, $documento]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $acreditado = $result[0]['cantidad'] > 0;

        return $acreditado;
    }

    private function grabar_foto($contenido)
    {
        global $config;

        try {
        
            $nombre_fichero_tmp = tempnam ( $config['foto_path'], 'salas_' );
            unlink($nombre_fichero_tmp);
            $nombreCompleto = $nombre_fichero_tmp.'.png';
            $gestor = fopen($nombreCompleto, "w");

            $data = str_replace('data:image/png;base64,', '', $contenido);
            $contenido = base64_decode($data);

            fwrite($gestor, $contenido);
            fclose($gestor);
    
            return $nombreCompleto;
    
        } catch (Exception $e) {
            var_dump($e);
            return null;
        }
    }

    function getOneAcreditacion($id_acreditacion) {
        $query = $this->db->prepare('SELECT * FROM acreditaciones WHERE id = ?');

        $query->execute([$id_acreditacion]);
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result[0];        
    }

    function fechaHoraValido($id_sala) {

        $sql = 'SELECT COUNT(*) AS cantidad 
                    FROM vw_salas_mesas 
                    WHERE id = ? AND 
                    horas < 24 and horas > 0';
        $query = $this->db->prepare($sql);

        $query->execute([$id_sala]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $valido = $result[0]['cantidad'] > 0;

        return $valido;
    }

    function registrar($datos) {

        $sala_id = $datos['id_sala'];
        $apellido = $datos['apellido'];
        $nombres = $datos['nombres'];
        $documento = $datos['documento'];
        $email = $datos['email'];
        $celular = $datos['celular'];
        $imagen = $datos['imagen'];

        try {
            $nombreArchivo = $this->grabar_foto($imagen);

            $sql = "INSERT INTO acreditaciones (sala_id, apellido, nombres, documento, celular, email, foto_file) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

            $query = $this->db->prepare($sql);

            $query->execute([$sala_id, $apellido, $nombres, $documento, $celular, $email, $nombreArchivo]);
            

        } catch (Exception $e) {
            var_dump($e);
            return false;
        }

        return true;
    }

}