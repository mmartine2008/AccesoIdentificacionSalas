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

    public function getCaptcha() {
        $this->view->getCaptcha();
    }

}