<?php
require_once 'app/model/fakedb.php';
class model{
    private $bbdd;

    public function __construct(){
        $this->bbdd = new bbdd();
        
    }

    public function DiasDisponibles(){
        $dias = $this->bbdd->Dias();
        
        $diasDisponibles = [];

        foreach ($dias as $dia) {
            if ($dia["disponible"] === "si") {
                $diasDisponibles[] = $dia;
            }
        }

        return $diasDisponibles;
        
    }

    
}