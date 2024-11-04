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


    public function eliminarProducto($id){
        $productoId=$this->model->traerProductoId($id);
        $this->view->mostrarProductos($productoId);
    
        public function mostrarProductosDestacados(){
        $logueado = $this->checkLogin();
        $destacados= $this->productosModel->traerDestacados();
        $this->productosView-> mostrarDestacados($destacados, $logueado);
    
    }
}

