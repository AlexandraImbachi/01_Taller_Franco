<?php
 class Netflix
{
    public $titulo;
    private $año_de_creacion;
    protected $alquilada;
    static $fecha_devolucion;
    public $dias;

    function __construct($vrtitulo, $vraño_de_creacion, $vralquilada, $vrdias)
    {
        $this->titulo = $vrtitulo;
        $this->año_de_creacion = $vraño_de_creacion;
        $this->alquilada = $vralquilada;
        Netflix::$fecha_devolucion = "01 de Marzo";
        $this->dias = $vrdias;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAñodecreacion()
    {
        return $this->año_de_creacion;
    }

    public function setAñodecreacion($año_de_creacion)
    {
        $this->año_de_creacion = $año_de_creacion;

    }

    public function getAlquiler()
    {
        return $this->alquilada;
    }

    public function setAlquiler($vralquilada)
    {
        $this->alquilada =$vralquilada;

    }

    public function setFechadevolucion()
    {
        Netflix::$fecha_devolucion;
    }

    public function getDias()
    {
        return $this->dias;

    }

    public function CostoAlquiler()
    {
        if ($this->dias <= 5) {
            $this->dias = $this->dias * 4000;
        }
        return $this->dias;
    }
}






?>