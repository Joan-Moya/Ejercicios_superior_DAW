<?php

$array = array(2,-4,5,-9,0);

foreach($array as $valor){ //la primera variable hace referecnai al array que queremos recorrer, la segunda es al variable donde almacena los valores del array en cada vuelta
    
    if($valor%2==0 && $valor!=0){
        echo "el numero ".$valor." es par <br>";
    }else if($valor%2==!0){
        echo "el numero ".$valor." es impar <br>";
    }else if($valor==0 || $valor<0){
        break;
    }
}

?>