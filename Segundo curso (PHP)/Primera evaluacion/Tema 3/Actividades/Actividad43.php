<?php

$contador=0;
$sumaImpares=0;
$mayorPares=0;
$cantidadImpares=0;
$mediaImpares=0;


$numeros= array (2,3,4,5,6,5,4,3,-4,6,5);

foreach($numeros as $valor){

    if($valor>0){
        $contador++;

            if($valor%2!=0){
                $sumaImpares+=$valor;
                $cantidadImpares++;
            }else{
                if($mayorPares<$valor){
                    $mayorPares=$valor;
                }
            }
    }else{
        break;
    }
}

$mediaImpares=$sumaImpares/$cantidadImpares;
echo "La media de los numeros impares es: ".$mediaImpares."<br>";
echo "Cantidad total de numeros introducidos es: ".$contador."<br>";
echo "El numero positivo mayor es: ".$mayorPares;

?>