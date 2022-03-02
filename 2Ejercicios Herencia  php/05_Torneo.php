<?php

class TorneoFutbol
{

    public $nombre_del_equipo;
    public $numero_de_integrantes;
    private $estado="Ascenso";

    function __construct($vr_nombre_del_equipo,$vr_numero_de_integrantes,$vr_estado)
    {
        $this->nombre_del_equipo=$vr_nombre_del_equipo;
        $this->numero_de_integrantes=$vr_numero_de_integrantes;
        $this->estado=$vr_estado;
    }
    
    function getEstado()
    {
       return $this->estado;
    }

    function setEstado($vr_estado)
    {
       $this->estado=$vr_estado;
     }
    

}

?>