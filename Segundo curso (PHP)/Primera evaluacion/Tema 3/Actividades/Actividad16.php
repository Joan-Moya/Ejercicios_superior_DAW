<?php

$array = array(2,-4,5,9,0,7,0,-6,9,0);
$sumaPositivos=0;
$sumaNegativos=0;
$contadorPositivos=0;
$contadorNegativos=0;
$contadorCeros=0;

foreach($array as $valor){ //la primera variable hace referecnai al array que queremos recorrer, la segunda es al variable donde almacena los valores del array en cada vuelta
    
    if($valor>0){
        $sumaPositivos+=$valor;
        $contadorPositivos++;
    }else if($valor<0){
        $sumaNegativos+=$valor;
        $contadorNegativos++;
    }else if($valor==0){
        $contadorCeros++;
    }
 }

 echo "La media de los numeros negativos es: ".$sumaNegativos/$contadorNegativos."<br>";
 echo "La media de los numeros positivos es: ".$sumaPositivos/$contadorNegativos."<br>";
 echo "Cantidad de ceros introducidos: ".$contadorCeros;

?>