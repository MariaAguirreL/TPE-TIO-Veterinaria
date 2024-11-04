<?php

require_once 'app/model/model.php';
require_once 'app/view/view.php';

class controller{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new model();
        $this->view = new view();

    }

    public function Sacarturnos(){
        $dias = $this->model->DiasDisponibles();

        $this->view->FormularioTurnos($dias);


    }

    public function CancelarTurno(){
        
    }

}