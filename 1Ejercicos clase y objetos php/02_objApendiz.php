<?php
require_once("02_claseAprendiz.php");

$objaprendiz = new aprendiz (1002807518, "Lopez ", "Luisa ", "Quimica", 5.0, 5.0, 5.0);
$objaprendiz->getdatosaprendiz();

print_r('<pre>');
print_r($objaprendiz);
print_r('</pre>');

echo "Aprendiz: " . $objaprendiz->nombres .  $objaprendiz->apellidos . "<br>";
echo " Su nota definitiva es: " . $objaprendiz->getDefinitiva() . "<br>";
echo "Su calificación es: " . $objaprendiz->getConceptovalorativo() . "<br>";

echo "Usted: " .$objaprendiz->getvaloracionCualitativa();







?>