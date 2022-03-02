<?php
require_once("04_clasePeluqueria.php");
$objPeluqueria=new Peluqueria( "DANE","lomas de granada",3142151010,"7:00 AM","8:00 PM", 10000," Cejas");
echo "Id Peluqueria: 00".$objPeluqueria->IdPeluqueria(0)."<br>";
echo "Nombre de la peluqueria: ".$objPeluqueria->nombre."<br>";
echo "Dirrecion de la peluqueria: ".$objPeluqueria->direccion."<br>";
echo "Numero de la peluqueria: ".$objPeluqueria->telefono."<br>";
echo "Abierto a las: ".$objPeluqueria->hora_inicio."<br>";
echo "Cerrado a las: ".$objPeluqueria->hora_cierre."<br>";
echo "Valor de corte : ".number_format ($objPeluqueria->getValorCorte())."<br>";
echo "Servicio: ".$objPeluqueria->getServicio()."<br>";


$objPeluqueria->AgendarCita();

print_r("<pre>");
echo "<h1>AGENDAR CITA</h1>";
print_r($objPeluqueria->AgendarCita());
print_r("</pre>");
echo "Cambio de servicio: ".$objPeluqueria->setServicio(3)."<br>";
echo "Cambio de servicio: ".$objPeluqueria->setValorCorte(3)."<br>";



?>