<?php
class Libro
{

    static $codigo=011;
    public $titulo;
    public $autor;


    function  __construct($vr_titulo,$vr_autor)
    {
        $this->titulo=$vr_titulo;
        $this->autor=$vr_autor; 
    }

    function Codigo()
    {
        echo  "Codigo: ".self::$codigo ;
    }

    function getTitulo()
    {
        return $this->titulo;
    }

    function getAutor()
    {
        return $this->autor;
    }


}



?>