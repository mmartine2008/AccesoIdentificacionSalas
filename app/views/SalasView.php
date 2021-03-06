<?php

    require_once(BASE_SERVER.'/app/lib/smarty/Smarty.class.php');
    require_once(BASE_SERVER.'/app/lib/captcha/functions_captcha.php');

    class SalasView {


        private $smarty;
    
        public function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('base_url', BASE_URL);
        }    
    
        public function getSmarty() {
            return $this->smarty;        
        }

        public function showMesas($salas) {

            $this->smarty->assign('titulo', 'Salas para Mesas de Examen');
            $this->smarty->assign('salas', json_encode($salas));

            $this->getSmarty()->display('templates/salas.tpl');            
            
        }

        public function showEventos($salas) {

            $this->smarty->assign('titulo', 'Salas para Eventos Generales');
            $this->smarty->assign('salas', json_encode($salas));

            $this->getSmarty()->display('templates/salas.tpl');            
            
        }        

        public function autenticar($sala) {
            
            $this->smarty->assign('sala_id', $sala->id);
            $this->smarty->assign('fecha', $sala->fecha);
            $this->smarty->assign('hora', $sala->hora);
            $this->smarty->assign('nombre', $sala->nombre);
            $this->smarty->assign('responsable', $sala->responsable);  

            $this->getSmarty()->display('templates/autenticar.tpl');            
        }

        public function getCaptcha() {
            $captchaFont = BASE_SERVER.'/app/lib/captcha/monofont.ttf';

            getCaptcha($captchaFont);
        }

        public function mostrarImagen($nombreArchivo) {
            $contenido = file_get_contents($nombreArchivo);

            //$contenido = base64_encode($contenido);
            // Codigo para recuperar la imagen y mostrarla.
            $im = imagecreatefromstring($contenido);
            header('Content-Type: image/png');
            imagepng($im);
            imagedestroy($im);
            // die;            
        }

        public function error($message) {
            $this->smarty->assign('errorlevel', 1);
            $this->smarty->assign('message', $message);
            $this->getSmarty()->display('templates/message.tpl');            
        }

        public function message($message) {
            $this->smarty->assign('errorlevel', 0);
            $this->smarty->assign('message', $message);
            $this->getSmarty()->display('templates/message.tpl');            
        }        

    }
        