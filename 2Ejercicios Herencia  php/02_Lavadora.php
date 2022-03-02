<?php
require_once("02_Electrodomestico.php");

class Lavadora extends Electrodomestico
{

    public $cantidad;
    public $precio;

    function __construct($vr_marca,$vr_cantidad,$vr_precio)
    {
        parent:: __construct($vr_marca);
        $this->cantidad=$vr_cantidad;
        $this->precio=$vr_precio;
    }

    function getCantidad()
    {
        return $this->cantidad;
    }

    function getPrecio()
    {
        return $this->precio;
    }
    
    function Venta($vr_venta)
    {
        $this->cantidad=$vr_venta;
        $vr_precio=$this->precio;
        if($vr_venta<=4){
            $total=$vr_precio* parent::iva;
            $total=$total+$vr_precio;
            $totalall=$total*$vr_venta;
        return $totalall;
        }else{
            echo "La cantidad no esta disponible ";
        }
    }

    function VentaDos($vr_venta2)
    {
        $this->cantidad=$vr_venta2;
        $vr_precio=$this->precio;
        if($vr_venta2<=6){
            $total=$vr_precio* parent::iva;
            $total=$total+$vr_precio;
            $totalall=$total*$vr_venta2;
        return $totalall;
        }else{
            echo "La cantidad no esta disponible ";
        }
    }
    
}




?>