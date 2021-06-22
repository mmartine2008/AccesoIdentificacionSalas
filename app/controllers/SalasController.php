<?php

require_once(BASE_SERVER.'/app/views/SalasView.php');
require_once(BASE_SERVER.'/app/models/SalasModel.php');
require_once(BASE_SERVER.'/app/models/ExamenModel.php');

class SalasController {

    private $view;

    function __construct() {
        $this->view = new SalasView();
        $this->model = new SalasModel();
        $this->modelExamen = new ExamenModel();
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

    public function validarMesaExamen()
    {
        $sala_id = $_POST['id_sala'];
        $documento = $_POST['documento'];

        $sala = (array) $this->model->getOne($sala_id);

        if ($sala['es_sala_examen'] == 'N') {
            return true; // Si no es sala examen, ya pasa el filtro
        }

        $id_llamado_mesa = $sala['id_llamado_mesa'];
        
        $resultado = $this->modelExamen->estaInscripto($documento, $id_llamado_mesa);

        return $resultado;
    }

    public function registrar() {

        if (!$this->captchaValido()) {
            $this->view->error('Codigo de seguridad captcha, no válido');
            return;
        }

        if ($this->yaAcreditado()) {
            $this->view->error('Ya estabas acreditado a esta sala');
            return;
        }

        if (!$this->validarMesaExamen()) {
            $this->view->error('No estas inscripto en esta mesa');
            return;
        }

        if ($this->model->registrar($_POST)) {
            $this->view->message('Registro exitoso');
        } else {
            $this->view->error('Error de servidor');
        }
        
    }

    private function yaAcreditado() {
 
        $sala_id = $_POST['id_sala'];
        $documento = $_POST['documento'];
        
        $resultado = $this->model->yaAcreditado($sala_id, $documento);
        
        return $resultado;
    }

    public function getCaptcha() {
        $this->view->getCaptcha();
    }

    public function mostrarImagen($id_acreditacion) {
        $acreditacion = $this->model->getOneAcreditacion($id_acreditacion);
        $this->view->mostrarImagen($acreditacion->foto_file);
    }

}