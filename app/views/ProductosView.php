<?php

require_once('libs/smarty/Smarty.class.php');
class ProductosView{

    private  $smarty;
    
    public function __construct(){
         $this->smarty = new Smarty();
         $this->smarty->assign("base", BASE_URL);

    }
     public function mostrarProductos($productos){
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('productos.tpl');
         
    }
}