<?php
require_once("05_Torneo.php");
require_once("05_Partidos.php");


echo "<h3> TORNEO </h3>";
$objTorneo=new TorneoFutbol("Milan",15,"Ascenso");
echo"Nombre del equipo: ". $objTorneo->nombre_del_equipo."<br>";
echo "Numero de jugadores : ".$objTorneo->numero_de_integrantes."<br>";
echo "Estado Asignado: ".$objTorneo->getEstado()."<br>";

echo "<h3> EQUIPO DOS </h3>";
$objPartidos=new Partidos("Juventus",15,"Ascenso",18);
echo"Nombre del equipo: ". $objPartidos->nombre_del_equipo ."<br>";
echo "Numero de jugadores : ".$objPartidos->numero_de_integrantes."<br>";
echo "Estado Asignado: ".$objPartidos->getEstado()."<br>";

echo "<h4> Cambiando Estado Asignado </h4>";
echo $objPartidos->NumeroPartidosGanados(7);


?>