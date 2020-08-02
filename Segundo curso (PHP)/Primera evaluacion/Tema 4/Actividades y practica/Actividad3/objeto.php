<?php
    class Portatil{
    private $codigo;
    private $descripcion;
    private $unidades;
    private $precio;
    private $defectuoso;

    function __construct($cod,$desc,$un,$prec,$def){
        $this->codigo=$cod;
        $this->descripcion=$desc;
        $this->unidades=$un;
        $this->precio=$prec;
        $this->defectuoso=$def;
       
    }

    function setCodigo($cod){
        $this->codigo=$cod;
    }
    function getCodigo(){
        return $this->codigo;
    }
    function setDescripcion($desc){
        $this->descripcion=$desc;
    }
    function getDescripcion(){
        return $this->descripcion;
    }
    function setUnidades($un){
        $this->unidades=$un;
    }
    function getUnidades(){
        return $this->unidades;
    }
    function setPrecio($prec){
        $this->precio=$prec;
    }
    function getPrecio(){
        return $this->precio;
    }
    function setDefectusoso($def){
        $this->defectuoso=$def;
    }
    function getDefectuoso(){
        return $this->defectuoso;
    }

    function anadeDefectuoso(){
        $this->defectuoso=true;
    }

    function eliminaDefectuoso(){
        $this->defectuoso=false;
    }

    function muestraPortatil(){
        echo "El codigo del portatil es= ".$this->codigo."<br>";
        echo "Las unidades del portatil= ".$this->unidades."<br>";
        echo "La descripcion del portatil es= ".$this->descripcion."<br>";
        echo "El portatil esta defectuoso ".$this->defectuoso."<br>";
        echo "El precio del portatil es= ".$this->precio."<br>";

    }
}
?>