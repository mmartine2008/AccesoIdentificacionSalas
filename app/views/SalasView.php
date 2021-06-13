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

        public function showAll() {
            $this->getSmarty()->display('templates/salas.tpl');            
            
        }

        public function autenticar($id) {
            $this->smarty->assign('id_sala', $id);
            $this->getSmarty()->display('templates/autenticar.tpl');            
        }

        public function getCaptcha() {
            $captchaFont = BASE_SERVER.'/app/lib/captcha/monofont.ttf';

            getCaptcha($captchaFont);
        }

    }
        