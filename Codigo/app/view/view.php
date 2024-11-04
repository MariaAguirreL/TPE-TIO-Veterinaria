<?php
use Smarty\Smarty;
require_once 'smarty/libs/Smarty.class.php';
class view{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
       
    }
    public function FormularioTurnos($dias){
        $this->smarty->assign('dias', $dias);
        $this->smarty->display('formulario.tpl');

    }

}