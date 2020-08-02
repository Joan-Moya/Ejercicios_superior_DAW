<?php

$cadena1= "     Agencia de Seguridad nacional para la defensa     ";

echo "Sin los espacios a la izquierda -->".strlen(ltrim($cadena1))."<br>";
echo "Sin los espacios a la derecha -->".strlen(rtrim($cadena1))."<br>";
echo "Sin los espacios en ambos lados -->".strlen(trim($cadena1))."<br>";


?>