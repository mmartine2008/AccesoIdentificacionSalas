<?php

require_once(BASE_SERVER.'/app/views/SalasView.php');

class SalasController {

    private $view;

    function __construct() {
        $this->view = new SalasView();
    }    
    
    public function showAll() {
        
        $this->view->showAll();
    }

    public function autenticar($id) {

        $this->view->autenticar($id);

    }

    private function captchaValido() {
        session_start();

        $generado = $_SESSION['captcha'];
        $recibido = $_POST['securityCode'];

        return ($generado == $recibido);
    }

    public function registrar() {

        if (!$this->captchaValido()) {
            $this->view->error('Codigo de seguridad captcha, no válido');
            return;
        }

        $this->view->message('Registro exitoso');
    }

    public function getCaptcha() {
        $this->view->getCaptcha();
    }

}