<?php

class ProductosModel{

    public function crearConexion(){
        try{
            $db =
                new PDO(
                "mysql:host=".dbHost.
                ";dbname=".dbName.";charset=utf8", 
                User, Password);
        }
        catch(\Throwable $th) {
                die($th);
            }
    
            return $db;
            
    }

    public function traerProductos(){
        $db= $this->crearConexion();
        $sentencia= $db->prepare("SELECT * FROM productos");
        $sentencia->excecute();
        $productos= $sentencia->fetchAll(PDO::OBJECT);

        return $productos;
    }
}