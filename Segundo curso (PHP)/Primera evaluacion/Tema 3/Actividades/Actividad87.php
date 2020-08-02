<?php

function impares($datos){

    $datosImpares = array();

    foreach($datos as $indice => $valor){
        if($indice%2!=0){
            $datosImpares[]=$valor;
        }
    }
        return $datosImpares;
}

$datos1 = array(3,4,5,6,4);
var_dump(impares($datos1));
?>