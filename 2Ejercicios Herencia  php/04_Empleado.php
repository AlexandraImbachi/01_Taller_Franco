<?php
require_once("04_Persona.php");
class Empleado extends Persona{

public $sueldo;
public $estado="Activo";

function __construct($vr_nombre,$vr_edad,$vr_sueldo,$vr_estado)
{
    parent:: __construct($vr_nombre,$vr_edad);
    $this->sueldo=$vr_sueldo;
    $this->estado=$vr_estado;
}

function getEstado(){
return $this->estado;

}
function setEstado($vr_estado){
    $this->estado=$vr_estado;
}

}


?>