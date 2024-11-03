<?php 
class bbdd{

    public function Dias(){
    $dias = [
        ["id" => 1, "dia" => "Lunes", "disponible" => "no"],
        ["id" => 2, "dia" => "Martes", "disponible" => "si"],
        ["id" => 3, "dia" => "Miércoles", "disponible" => "si"],
        ["id" => 4, "dia" => "Jueves", "disponible" => "no"],
        ["id" => 5, "dia" => "Viernes", "disponible" => "no"],
    
    ];
    return $dias;
    }

}
?>