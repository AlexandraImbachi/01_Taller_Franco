<?php
require_once("01_Persona.php");

class Contador extends Persona{

protected $diaslaborados;

function __construct($vr_nombre,$vr_edad,$vr_sueldo,$vr_diaslaborados)
{

    parent::__construct($vr_nombre,$vr_edad,$vr_sueldo);
    $this->diaslaborados=$vr_diaslaborados;
    $this->sueldo=$vr_sueldo;
}

function getNombre(){

return $this->nombre;

}
function getEdad(){
    return $this->edad;

}

function getSueldo(){
    
return $this->sueldo;


}
function getDiaslaborados(){
 
return $this->diaslaborados;

}
function SueldoDiastrabajados($vr_diaslaborados){
    $this->diaslaborados=$vr_diaslaborados;
    $vr_sueldo=$this->sueldo;

    $totaldias=$vr_diaslaborados*$vr_sueldo;
    return $totaldias;
}


}



?>