<?php

        //este ejemplo es para las constantes
        define ("IVA",0.21);
        $precio = 1000;
        echo "El del producto es: ".($precio*IVA)."<br>";

        if(defined("Peso")){ 
            Echo "La constante existe!!";
        }else {
            echo "La constante No existe!!";
        }

        //ahora vamos a imprimir constantes predefinidas que te da informacion

        echo "<hr>";
        echo "la version que se usa de php en este sistema es: ".PHP_VERSION."<br>";
        echo "Esta es la version del sistema: ".PHP_OS."<br>";

        echo "<hr>";
        $cadena="Esto es una prueba";
        echo var_dump($cadena);

        echo "<hr>";
        $sueldo = 1200.7678;
        echo number_format($sueldo,2,",",".")." &euro;<br>";

?>
