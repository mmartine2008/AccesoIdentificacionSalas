<?php

require_once(BASE_SERVER.'/app/views/SalasView.php');
require_once(BASE_SERVER.'/app/models/SalasModel.php');

class SalasController {

    private $view;

    function __construct() {
        $this->view = new SalasView();
        $this->model = new SalasModel();
    }    
    
    public function showAll() {
        
        $salas = $this->model->getAll();
        $this->view->showAll($salas);
    }

    public function autenticar($id) {

        $sala = $this->model->getOne($id);
        $this->view->autenticar($sala);

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

        if ($this->model->registrar($_POST)) {
            $this->view->message('Registro exitoso');
        } else {
            $this->view->error('Error de servidor');
        }

        
    }

    public function getCaptcha() {
        $this->view->getCaptcha();
    }

}