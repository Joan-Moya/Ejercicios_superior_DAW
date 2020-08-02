<?php

$cadena= "Agencia de Seguridad nacional";

$pos = strripos($cadena, "Seguridad");
$pos2 = strrpos($cadena, "a"); //posicion de la ultima vez

echo $pos;
echo "<hr>";
echo "La posicion en cadena de la ultima a es: ".$pos2;

?>