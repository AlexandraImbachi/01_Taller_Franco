<?php
require_once("06_Zapatos.php");
class Deportivos extends Zapatos
{

    public $descripcion;
    public $precio;
    public $cantidad;

function __construct($vr_talla,$vr_marca,$vr_strock,$vr_descripcion,$vr_precio,$vr_cantidad){
    parent:: __construct($vr_talla,$vr_marca,$vr_strock);
    $this->descripcion=$vr_descripcion;
    $this->precio=$vr_precio;
    $this->cantidad=$vr_cantidad;

}

function setInventario()
{
    $arrayInventario =Array(
         parent::getInventario(),
        'Descripcion'=>$this->descripcion,
        'Precio: '=>$this->precio,
        'cantidad'=>$this->cantidad,
    );
    
    return $arrayInventario;
    }  
    function CantidadStrock($vr_strock){
        $this->strock=$vr_strock;
        if ($vr_strock<=15){
        echo"La cantidad esta disponible"."<br>";}
        else{
            echo"No se puede hacer la compra, Cantidad no disponible";
       }
    }


}

?>