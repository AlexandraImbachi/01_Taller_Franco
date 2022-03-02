<?php
require_once("03_Libro.php");

class Revista extends Libro{

    public $edicion;
    public $numero_paginas;


    function __construct($vr_titulo,$vr_autor,$vr_edicion,$vr_numero_paginas)
    {
        parent:: __construct($vr_titulo, $vr_autor);
        parent::$codigo;
        $this->edicion=$vr_edicion;
        $this->numero_paginas=$vr_numero_paginas;
        
    }

    function getEdicion(){
        return $this->edicion;
    }
    function getNumeroPaginas(){
        return $this->numero_paginas;
    }
}


?>