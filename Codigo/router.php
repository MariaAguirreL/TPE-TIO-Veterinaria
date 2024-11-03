<?php
require_once 'app/controller/controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
   
   if (empty($_GET['action'])) {
       $_GET['action'] = 'home';
   } 

   $accion = $_GET['action']; 
   $parametros = explode('/', $accion);
   $controller = new controller();
 
   switch ($parametros[0]) {
    case 'turnos':
        $this->controller->SacarTurnos();
    break;

   }