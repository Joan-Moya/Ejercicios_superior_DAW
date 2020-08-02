<?php

$cadena1= "Agencia de Seguridad nacional para la defensa";
$posicion=strpos($cadena,"nacional"); //esto guarda la posicion

echo substr($cadena1,$posicion,17);

?>