<?php

$poblaciones = array("Valencia","Castellon","Alincante","Murcia","Albacete","Teruel","Madrid","Barcelona");

array_push($poblaciones,"Zaragoza"); //esto es apra añadirlo al principio

foreach($poblaciones as $valor){
    echo $valor."<br>";
}

?>