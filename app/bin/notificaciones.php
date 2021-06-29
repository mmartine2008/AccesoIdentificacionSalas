<?php

    class Notificador {

        function __construct (){
            $dbname = 'docentes';
            $dbuser = 'postgres';
            $dbpass = 'postgres';
            $host = 'pgdb';

            $this->conexion = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass);
        }

        function query($sqlText) 
        {
            $db = $this->conexion;
            try {
                $datos = $db->query($sqlText)->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $ex) {
                echo($sqlText);
            }
        
            return $datos;			
        }

        /*
        * No interesa en que hora se acredita el alumno.
        * Simplemente notifica a partir de una hora antes del examen 
        * a todos los que no esten notificados.
        * Si se corre cada 5' esa sera la espera maxima
        */
        private function getAcreditacionesActivas() {

            $sql = "SELECT *
                        from acreditaciones t_a 
                        join vw_salas_mesas t_s on (t_a.sala_id  = t_s.id )";
            
            $resultados = $this->query($sql);
            print_r($resultados); die(__file__);
            return $resultados;            
        }

        private function notificarMail($acreditado) {
            
        }

        private function cambiarEstadoNotificado($acreditado) {
            print_r($acreditado);
            
        }

        private function notificar($acreditado) {
            $this->notificarMail($acreditado);
            $this->cambiarEstadoNotificado($acreditado);
        }

        private function emitirNotificaciones($acreditados)
        {
            foreach ($acreditados as $acreditado) {
                $this->notificar($acreditado);
            }
        }

        public function run() {
            $acreditados = $this->getAcreditacionesActivas();
            print_r($acreditados);
            $this->emitirNotificaciones($acreditados);
        }
    }

    $n = new Notificador();
    $n->run();
?>