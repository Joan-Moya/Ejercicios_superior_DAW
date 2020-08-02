<?php

$poblaciones = array("Valencia","Castellon","Alicante","Murcia","Albacete","Teruel","Madrid","Barcelona");

array_push($poblaciones,"Zaragoza"); //esto es para añadirlo al principio

$poblacionesNuevas = array ("Malaga","Sevilla");

array_splice($poblaciones,3,3,$poblacionesNuevas);

foreach($poblaciones as $valor){
    echo $valor."<br>";
}

?>