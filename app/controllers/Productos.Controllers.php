<?php

require_once 'models/ProductosModel.php';
require_once 'views/ProductosView.php';

class ProductosController{
    private $model;
    private $view;

    function __construct(){
        $this->model= new ProductosModel;
        $this->view= new ProductosView;
    }

    public function obtenerProductos(){
        $productos= $this->model-> traerProductos();
        $this->view->mostrarProductos($productos);
    }
}

