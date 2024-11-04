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
        $sentencia->execute();
        $productos= $sentencia->fetchAll(PDO::OBJECT);

        return $productos;
    }

    public function ELiminarPorId($id){
        $db=$this->crearConexion();
        $sentencia=$db->prepare("SELECT * FROM productos WHERE id_producto=?");
        $sentencia->execute([$id]);
    }
}