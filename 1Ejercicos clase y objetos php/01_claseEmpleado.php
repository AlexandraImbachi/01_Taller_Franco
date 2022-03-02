<?php
class Empleado
{
    private $nombre;
    private $celular;
    protected $cargo;
    public $sueldo;
    public $auxilio_de_transporte;

    function __construct(string $vr_nombre, int $vr_celular, string $vr_cargo, int $vr_sueldo, int $vr_auxilio_de_transporte)
    {
        $this->nombre = $vr_nombre;
        $this->celular = $vr_celular;
        $this->cargo = $vr_cargo;
        $this->sueldo = $vr_sueldo;
        $this->auxilio_de_transporte =$vr_auxilio_de_transporte;
    }

    public function getNombre()
    {
       return $this->nombre;
    }
    public function setNombre($vr_nombre)
    {
        return $this->nombre = $vr_nombre;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    public function setCelular($vr_celular)
    {
        return $this->celular = $vr_celular;
    }
    public function getCargo()
    {
        return $this->cargo;
    }

    public function getDatosEmpleado()
    {
        $arrayDatosEmpleado = array(
            'Cargo: ' => $this->cargo,
            'Sueldo: ' =>$this->sueldo,
        );
        return $arrayDatosEmpleado;
    }
    public function Retefuente()
    {
        if($this->sueldo>3750000){
            echo $this->nombre;
            echo "<br>";
            $suel =("Debe pagar una retención en la funete de un 9%");
        }else{
            echo $this->nombre;
            echo "<br>";
            $suel = ("No debe pagar retención en la fuente");
        }
        return $suel;
    }


}
?>