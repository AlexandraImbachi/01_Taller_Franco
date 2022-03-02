<?php
require_once ("01_Persona.php");
// que herede de la clase Persona. 
class Empleado extends Persona{

    private $sueldo;
 
    function __construct($vr_nombre,$vr_edad,$vr_sueldo)
    {
        parent::__construct($vr_nombre,$vr_edad);
        $this->sueldo=$vr_sueldo;
       
    }

    function getSueldo(){
        return $this->sueldo;
    }
    
    function setSueldo($vr_sueldo){
        $this->sueldo=$vr_sueldo;
    }

    
   


}


?>