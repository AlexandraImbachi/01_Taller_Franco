<?php
require_once("05_Torneo.php");
class Partidos extends TorneoFutbol{

    public $numero_partidos_ganados;

    function __construct($vr_nombre_del_equipo,$vr_numero_de_integrantes,$vr_estado,$vr_numero_partidos_ganados)
    {
        parent::__construct($vr_nombre_del_equipo,$vr_numero_de_integrantes,$vr_estado);
        $this->numero_partidos_ganados=$vr_numero_partidos_ganados;
    }

    function NumeroPartidosGanados($vr_numero_partidos_ganados){
        $this->numero_partidos_ganados=$vr_numero_partidos_ganados;
        if ($vr_numero_partidos_ganados<15){

            parent::setEstado("Desenso");
            echo "ESTADO ACTUAL: ";
            return parent::getEstado();
          
        }

    }

}


?>