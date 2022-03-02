<?php
require_once("03_claseNetflix.php");

$objNetflix = new Netflix ("Enredados", 2010, "si", 2);
echo "Nombre de la pelicula: " . $objNetflix->getTitulo() . "<br>";
echo "Año de creación: " . $objNetflix->getAñodecreacion() . "<br>";
echo "Disponible para alquiler: " . $objNetflix->getAlquiler() . "<br>";
echo "Fecha prevista de devolución: " . Netflix::$fecha_devolucion . "<br>";
echo "Dias de alquiler: " . $objNetflix->getDias() . "<br>";
echo "Valor a pagar por los dias de alquiler: " . number_format($objNetflix->CostoAlquiler());


?>