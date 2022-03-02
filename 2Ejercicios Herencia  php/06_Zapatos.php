<?php
class Zapatos
{

    public $Talla;
    public $marca;
    private  $strock=7;
    
    function __construct($vr_talla,$vr_marca,$vr_strock)
    {
        $this->talla=$vr_talla;
        $this->marca=$vr_marca;
        $this->strock=$vr_strock;
    
    }
    
    
    function getInventario()
    {
    $arrayInventario =Array(
        'Talla: '=>$this->talla,
        'Marca :'=>$this->marca,
        'Strock '=>$this->strock
    
    );
    return $arrayInventario;
    }
    
    
    
    }


?>