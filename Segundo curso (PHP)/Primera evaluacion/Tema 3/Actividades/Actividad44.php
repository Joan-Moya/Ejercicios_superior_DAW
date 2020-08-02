<?php
$numeroBase=1;
$numeroPuesto=300;
$cantNumerosImpares=0;
$sumaNumerosImpares=0;

for($var=$numeroBase; $var<=100; $var++){
    if($var%3!=0){
        echo $var."<br>";
        $cantNumerosImpares++;
        $sumaNumerosImpares+=$var;
    }
}

echo "<hr>";
echo "Cantidad de numeros impares: ".$cantNumerosImpares."<br>";
echo "Suma de numeros impares es: ".$sumaNumerosImpares;
?>