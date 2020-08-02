<?php

$poblaciones = array("Valencia","Castellon","Alicante","Murcia","Albacete","Teruel","Madrid","Barcelona");

array_push($poblaciones,"Zaragoza"); //esto es para añadirlo al principio

$poblacionesNuevas = array ("Malaga","Sevilla");

array_splice($poblaciones,3,0,$poblacionesNuevas);//añadimos las ciudades

array_splice($poblaciones,2,2);//eliminams malaga y sevilla

$poblacionesNuevas2 = array ("Caceres","Cadiz","Badajoz");

array_splice($poblaciones,3,2,$poblacionesNuevas2);//sustiuimos madrid y barcelona por el array2





//A PARTIR DE AQUI ES EL EJERCICIO 74
echo "<br>";

$poblacionesSobrantes = array_slice($poblaciones,6);//Devolver un subarray con las poblaciones desde Teruel al final del array.

foreach($poblacionesSobrantes as $valor){
    echo $valor."<br>";
}

?>