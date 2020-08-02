<?php

$fecha="32-12-2012 a las 19,45,00 ";

$mod1= str_replace("-", "/", $fecha, $veces);
echo str_replace(",", ":", $mod1, $veces2)."<br>";
?>