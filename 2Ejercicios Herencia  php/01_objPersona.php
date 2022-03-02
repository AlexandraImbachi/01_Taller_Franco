<?php
require_once("01_Persona.php");
require_once("01_Empleado.php");
require_once("01_Contador.php");

$objPersona=new Persona("Alejandro",19);

echo "<h2>PERSONA</h2>";

print_r("<pre>");
print_r($objPersona->Responsabilidades());
print_r("</pre>");

$objPersona=new Empleado("Daniel",21,1100000);
echo "<h2>EMPLEADO</h2>";
echo "Nombre: ".$objPersona->nombre. "<br>";
echo "Edad: ".$objPersona->edad."<br>";
echo "Sueldo: ".number_format($objPersona->getSueldo());

echo "<h2>CONTADOR</h2>";
$objPersona=new Contador("Kevin",20,160000,13);

echo "Nombre: ".$objPersona->getNombre()."<br>";
echo "Edad: ".$objPersona->getEdad()."<br>";
echo "Sueldo por dia: ".number_format ($objPersona->getSueldo())."<br>";
echo "Dias trabajados: ".$objPersona->getDiaslaborados()."<br>";
echo "Sueldo total de los dias trabajados: ".number_format($objPersona->SueldoDiastrabajados(15))."<br>";




?>