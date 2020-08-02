<?php


$alumnos = array ("Pedro","Ana","Marta");

unset($alumnos[1]);//borramos la posicion del array
$alumnos[]="Roberto"; //añadimos un valor a la ultima posicion del array

foreach($alumnos as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
?>