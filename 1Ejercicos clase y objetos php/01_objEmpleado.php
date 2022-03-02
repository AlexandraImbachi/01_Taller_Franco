<?php

require_once("01_claseEmpleado.php");

$objEmpleado = new Empleado("Cristian", 3142151010,"portero", 1500000, 20000);
echo "Nombre: " . $objEmpleado->getNombre() . "<br>";
echo "Celular: " . $objEmpleado->getCelular() . "<br>";
echo "Cargo: " . $objEmpleado->getCargo(). "<br>";
echo "Sueldo: " . $objEmpleado->sueldo . "<br>";
echo "Auxilio de transporte: " . $objEmpleado->auxilio_de_transporte . "<br>";
echo $objEmpleado->Retefuente();



?>