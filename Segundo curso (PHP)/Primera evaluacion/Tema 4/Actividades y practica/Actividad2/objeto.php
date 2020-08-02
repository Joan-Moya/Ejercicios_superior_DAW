<?php
   class Producto{
    private $codProducto;
    private $nombreProducto;
    private $descripcion;
    private $categoria;
    private $peso;
    private $precio;
    private $stock;

    function __construct($cod,$nomb,$desc,$cat,$peso,$prec,$stock){
        $this->codProducto=$cod;
        $this->nombreProducto=$nomb;
        $this->descripcion=$desc;
        $this->categoria=$cat;
        $this->peso=$peso;
        $this->stock=$stock;
    }

    function augmentaStock($cant){
        $this->stock+=$cant;
    }

    function disminuyeStock($cant){
        $this->stock=$cant;
    }

    function ivaProducto($iva){
        $this->precio*$iva;
    }

    function mostrarDatos(){
        echo "El codigo del producto es= ".$this->codProducto."<br>";
        echo "El nombre del producto es= ".$this->nombreProducto."<br>";
        echo "La descripcion del producto es= ".$this->descripcion."<br>";
        echo "La categoria del producto es= ".$this->categoria."<br>";
        echo "El peso del producto es= ".$this->peso."<br>";
        echo "El stock del producto es= ".$this->stock."<br>";

    }
}
?>