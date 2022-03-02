<?php
class Persona
{


    public $nombre;
    private $edad;

    function __construct($vr_nombre,$vr_edad)
    {
        $this->nombre=$vr_nombre;
        $this->edad=$vr_edad;
    }

    function DatosArray()
    {
        $arrayDatos=Array(
            'Nombre: '=>$this->nombre,
            
        );
        return $arrayDatos;
    }

    function getEdad()
    {
        return $this->edad;
    }

    function setEdad($vr_edad)
    {
        $this->edad=$vr_edad;
    }
}


?>