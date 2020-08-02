<?php
//funcion parametros paso valor
function sumaValor($num1,$num2){
    $suma = $num1 + $num2;
    $num1=0;
    return $suma;
}

$num1=4;
$num2=5;
echo sumaValor($num1,$num2)."<br>";
echo $num1."<hr>";

//funcion parametro paso por referencia
function sumaRef(&$num1,$num2){// EL & QUIERE DECIR QUE EL VALOR DE LA VARIABLE CAMBIARA TAMBIEN FUERA
    $suma =  $num1 + $num2;
    $num1 = 0;
    return $suma;
}

$num1=4;
$num2=5;

echo sumaRef($num1,$num2)."<br>";
echo $num1."<br>";
?>