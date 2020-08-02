<?php

$array = array(2,-4,5,-9,0);

foreach($array as $valor){ //la primera variable hace referecnai al array que queremos recorrer, la segunda es al variable donde almacena los valores del array en cada vuelta
    
    if($valor<0){
        echo "el numero ".$valor." es negativo <br>";
    }else if($valor>0){
        echo "el numero ".$valor." es positivo <br>";
    }else if($valor==0){
        break;
    }
}

?>