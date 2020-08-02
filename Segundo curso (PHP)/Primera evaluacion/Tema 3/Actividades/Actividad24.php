<?php

$cantNegativos=0;

$numeros = array(4,-1,4,5,6,6,-7,4,6,-4);

 foreach($numeros as $valor){

    if($valor<0){
        $cantNegativos++;
    }
 }
          echo "cantidad de numeros negativos: ".$cantNegativos++;
?>