<?php

require_once('Model.php');
require_once(BASE_SERVER.'/app/config/config.php');

class SalasModel extends Model {

    /**
     * @return array
     * Retorna todas las tareas almacenadas en la tabla task
     */
    function getAll() {

        $query = $this->getDb()->prepare('SELECT * FROM sala');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getOne($id) {

        $query = $this->getDb()->prepare('SELECT * FROM sala WHERE id = ?');

        $query->execute([$id]);
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result[0];
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

            // Codigo para recuperar la imagen y mostrarla.
            // $im = imagecreatefromstring($contenido);
            // header('Content-Type: image/png');
            // imagepng($im);
            // imagedestroy($im);
            // die;
            fwrite($gestor, $contenido);
            fclose($gestor);
            
    
            return $nombreCompleto;
    
        } catch (Exception $e) {
            var_dump($e);
            return null;
        }
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

            $query = $this->getDb()->prepare($sql);

            $query->execute([$sala_id, $apellido, $nombres, $documento, $celular, $email, $nombreArchivo]);
            

        } catch (Exception $e) {
            var_dump($e);
            return false;
        }

        return true;
    }

}