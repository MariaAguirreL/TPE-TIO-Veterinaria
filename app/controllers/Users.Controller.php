<?php

require_once 'models/Users.Model.php';
require_once 'views/Users.View.php';

class UsersController{

    private $view;
    private $model;

    function __construct(){
        $this->model= new UsersModel;
        $this->view= new UsersView;
    }


    public function autenticar(){
        $nombre= $_REQUEST['nombre'];
        $email= $_REQUEST['email'];
        $usuario= $this->model-> buscarUsuario($nombre);

        if($email== $usuario->email){
            session_start();
            $_SESSION['NOMBRE'] = $usuario->nombre;
            $_SESSION['USUARIO_ID'] = $usuario->usuario_id;
            $_SESSION['EMAIL'] = $usuario->email;
            $_SESSION['MASCOTA'] = $usuario->mascota;

            


        }
        else{
            echo "No fue posible autenticar el usuario";
        }

    }
}

?>
