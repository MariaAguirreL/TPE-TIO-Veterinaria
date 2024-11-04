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
        $productos= $sentencia->fetchAll(PDO:: FETCH_OBJ);

        return $productos;
    }

    public function traerProductoId($id){
        $db=$this->crearConexion();
        $sentencia= $db-> prepare("SELECT * FROM productos WHERE id_producto=?");
        $sentencia->excecute([$id]);
        $producto= $sentencia-> fetch(PDO::FETCH_OBJ);

        return $producto;
    }
}