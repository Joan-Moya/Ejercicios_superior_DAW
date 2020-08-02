<?php
abstract class Inmueble{
    private $codigo;
    private $tipo;
    private $direccion;
    private $poblacion;
    private $metrosCuadrados;
    private $numeroBaños;
    private $numeroPlazasGaraje;
    private $precio;
    private $foto;

    function __construct($cod,$tip,$direc,$pobl,$metros,$baños,$numPlazas,$precio,$foto){
        $this->codigo=$cod;
        $this->tipo=$tip;
        $this->direccion=$direc;
        $this->poblacion=$pobl;
        $this->metrosCuadrados=$metros;
        $this->numeroBaños=$baños;
        $this->numeroPlazasGaraje=$numPlazas;
        $this->precio=$precio;
        $this->foto=$foto;
    }

    function calculaIVA (){
        $precioiva=$this->precio*0.10;
        return $precioiva;
    }

    function mostrarInmueble(){
        echo "El codigo del inmubele es= ".$this->codigo."<br>";
        echo "El tipo de inmubele es= ".$this->tipo."<br>";
        echo "La direccion del inmubele es= ".$this->direccion."<br>";
        echo "La poblacion del inmubele es= ".$this->poblacion."<br>";
        echo "Los metros cuadrados del inmubele son= ".$this->metrosCuadrados."<br>";
        echo "Numero de baños del inmubele son= ".$this->numeroBaños."<br>";
        echo "Numero de plazas de garaje del inmubele son= ".$this->numeroPlazasGaraje."<br>";
        echo "El precio del inmubele es= ".$this->precio."<br>";
        echo "Foto del inmueble= ".$this->foto."<br>";
    }
}


    class Chalet extends Inmueble{
        private $metrosCuadradosParcela;
        private $piscina;
        private $paellero;
        
            function __construct($cod,$tip,$direc,$pobl,$metros,$baños,$numPlazas,$precio,$foto, $metrosParcela,$piscina,$paellero){
                parent::__construct($cod,$tip,$direc,$pobl,$metros,$baños,$numPlazas,$precio,$foto);
                $this->metrosCuadradosParcela=$metrosParcela;
                $this->piscina=$piscina;
                $this->paellero=$paellero;
            }

            function mostrarChalet(){
                parent::mostrarInmueble();
                echo "Metros cuadrados de la parcela= ".$this->metrosCuadradosParcela."<br>";
                echo "Piscina= ".$this->piscina."<br>";
                echo "Paellero= ".$this->paellero."<br>";
            }

            function comision(){
                return "La comision es del 5% en los Chalets";
            }

    }

    class Vivienda extends inmueble{
        private $alturaVivienda;
        private $balcon;
        private $exterior;

        function __construct($cod,$tip,$direc,$pobl,$metros,$baños,$numPlazas,$precio,$foto, $altura,$balcon,$exterior){
            parent::__construct($cod,$tip,$direc,$pobl,$metros,$baños,$numPlazas,$precio,$foto);
            $this->alturaVivienda=$altura;
            $this->balcon=$balcon;
            $this->exterior=$exterior;
        }

        function mostrarVivienda(){
            parent::mostrarInmueble();
            echo "La altura de la vivienda es ".$this->alturaVivienda."<br>";
            echo "Balcon= ".$this->balcon."<br>";
            echo "Exterior= ".$this->exterior."<br>";
        }
      
        function comision(){
            if($this->piscina==true){
                return "Comision de 1000€";
            }else if($this->Paellero==true){
                return " Plus de 500€";
            }
            
        }
    }


    
?>