<?php
class Persona{

    public $nombre;
    public $edad;


function __construct($vr_nombre,$vr_edad)
{
    $this->nombre=$vr_nombre;
    $this->edad=$vr_edad;

}

function Responsabilidades(){
   $arrayDatos =Array(
       'Nombre: '=>$this->nombre,
       'Edad: '=>$this->edad,
   );
   
    return $arrayDatos;
}

}




?>