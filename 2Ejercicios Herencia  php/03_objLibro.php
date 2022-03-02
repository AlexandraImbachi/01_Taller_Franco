<?php
require_once("03_Libro.php");
require_once("03_Revista.php");

echo "<h2>LIBRO</h2>";
$objLibro=new Libro("A través de mi ventana","Ariana Godoy");
echo  $objLibro->Codigo(010)."<br>";
echo "Nombre: ".$objLibro->getTitulo()."<br>";
echo "Autor: ".$objLibro->getAutor()."<br>";

echo "<h2>REVISTA</h2>";
$objRevista=new Revista("The Washington Post","Bod Woodward","Texto",52);
echo $objRevista->Codigo(011)."<br>";
echo "Nombre: ".$objRevista->getTitulo()."<br>";
echo "Autor: ".$objRevista->getAutor()."<br>";
echo "Edicion: ".$objRevista->getEdicion()."<br>";
echo "Numero Paginas: ".$objRevista->getNumeroPaginas()."<br>";





?>