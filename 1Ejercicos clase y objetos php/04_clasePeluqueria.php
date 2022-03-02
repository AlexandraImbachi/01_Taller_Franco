<?php
class Peluqueria{

    static $id_peluqueria= 01;
    public $nombre;
    public $direccion;
    public $telefono;
    public $hora_inicio;
    public $hora_cierre;
    public $valor_corte;
    private $servicio;
    
    function __construct($vr_nombre, $vr_direccion, $vr_telefono, $vr_hora_inicio, $vr_hora_cierre,$vr_valor_corte,$vr_servicio)
    {
        $this->nombre=$vr_nombre;
        $this->direccion=$vr_direccion;
        $this->telefono=$vr_telefono;
        $this->hora_inicio=$vr_hora_inicio;
        $this->hora_cierre=$vr_hora_cierre;
        $this->valor_corte=$vr_valor_corte;
        $this->servicio=$vr_servicio;
    }
    function getValorCorte(){
        return $this->valor_corte;
    }
    function setValorCorte($vr_valor_corte){
    $this->valor_corte=$vr_valor_corte;
    if ($vr_valor_corte==1){
        return 15000;
     } elseif ($vr_valor_corte==2){
          return 17000;
     }elseif($vr_valor_corte==3){
        return 19000;
     }
    }
    function getServicio(){
        return $this->servicio;
    }
    function setServicio($vr_servicio){
    $this->servicio=$vr_servicio;
    if ($vr_servicio==1){
       return "Corte cabello";
    } elseif ($vr_servicio==2){
         return "Corte cabello + cejas ";
    }elseif($vr_servicio==3){
       return "Corte cabello + Cejas + Barba ";
    }
    }
    function IdPeluqueria(){
    return self::$id_peluqueria;
    }
    function AgendarCita(){
        $arrayAgendar = Array(
            'Servicio: '=>$this->servicio,
            'Valor de corte: '=>$this->valor_corte,
    
        );
        return $arrayAgendar;
     
    
    }
    }//end





?>