<?php

require_once('Model.php');
require_once(BASE_SERVER.'/app/config/config.php');

class ExamenModel extends Model {

    function __construct()
    {
        global $config;
        
        $this->db = $this->create_connection($config['guarani']);
    }

    public function create_connection($baseConfig) {

        $config = $baseConfig;

        // Atencion: Modificar esto segun la instalacion:
        $host = $config['host'];
        $userName = $config['userName'];
        $password = $config['password'];
        $database = $config['database'];
        $instancia = $config['instancia'];
        $port = $config['port'];


        try {
            $dsn = "informix:host=$host; service=$port;database=$database; server=$instancia; protocol=onsoctcp; EnableScrollableCursors=1;";

            return new PDO($dsn, $userName, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        } catch (Exception $e) {
            debug_print_backtrace();
            var_dump($e);
            die(__FILE__.":".__LINE__);
        }

    }    

    // /**
    //  * @return array
    //  * Retorna todas las tareas almacenadas en la tabla task
    //  */
    // function getAll() {

    //     $query = $this->db->prepare('SELECT * FROM sala ORDER BY fecha, hora, nombre');
    //     $query->execute();
    //     return $query->fetchAll(PDO::FETCH_OBJ);
    // }


    function estaInscripto($documento, $id_llamado_mesa) {
        // Como no me funciona el prepare...        
        $nro_documento = (int) $documento;
        $id_llamado_mesa = (int) $id_llamado_mesa;

        $sql = "select COUNT(*) AS CANTIDAD
                from sga_llamados_mesa t_ll 
                    join sga_insc_examen t_ix on (
                    t_ll.unidad_academica = t_ix.unidad_academica and
                    t_ll.materia = t_ix.materia and 
                    t_ll.anio_academico = t_ix.anio_academico and
                    t_ll.turno_examen = t_ix.turno_examen and 
                    t_ll.mesa_examen = t_ix.mesa_examen and 
                    t_ll.llamado = t_ix.llamado
                    ) 
                    join sga_alumnos t_al on (t_al.legajo = t_ix.legajo)
                    join sga_personas t_pe on (t_al.nro_inscripcion = t_pe.nro_inscripcion)
                where 
                    t_ll.id_llamado_mesa = $id_llamado_mesa and
                    t_pe.nro_documento = '$nro_documento'";
        
        $resultado = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $cantidad = $resultado[0]['CANTIDAD'];

        return ($cantidad > 0) ;
    }

}