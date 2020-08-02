<?php

$nombre="Joan";
$sueldo=1470.56;
$fijo=false;

echo gettype($nombre)."<br>";
echo gettype($sueldo)."<br>";
echo gettype($fijo)."<br>";

echo "<hr>";
$unidades = "5";
echo gettype($unidades)."<br>";
settype($unidades,"integer"); //aqui ponemos que variable elegimos y que tipo de datos queremos que seaa
echo gettype($unidades)."<br>";

echo "<hr>";
echo(isset($unidades)?"Inicializada<br>":"No inicializada<br>"); //isset es para saber si una variable tiene valor o no 
unset($unidades);//borramos la variable
echo(isset($unidades)?"Inicializada<br>":"No inicializada<br>"); //isset es para saber si una variable tiene valor o no 

//empty devuelve verdad cuando la variable no este inicializada, vale 0 o si es de tipo string dos comillas
$precio=0;
echo "<hr>";
echo (empty($precio)?"Sin precio<br>":"Con precio<br>");
$precio=1200;
echo (empty($precio)?"Sin precio <br>":"Con precio<br>");
?>