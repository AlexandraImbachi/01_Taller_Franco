<?php
class Electrodomestico
{

    public $marca;
    const iva = 0.19;
 
    function __construct($vr_marca)
    {
        $this->marca=$vr_marca;
    }

    function MostrarconstanteIVA()
    {
        echo "IVA: " . self::iva. "<br>";
    }
}



?>