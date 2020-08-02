<?php

$alumnos = array ("Luis"=>4.5,"Pedro"=>7.3,"Ana"=>8.5,"Rosa"=>3.1,"Angel"=>1.5,"Maria"=>6.5,"Sara"=>9.1,"Roberto"=>3.5);

$alumnos["Alba"]= 9.5; //no inserta el alumno


asort($alumnos); //esto es para ordenar los valores guardando relacion con los indices

//ksort es apra ordenar por indices


foreach($alumnos as $indice => $dato){

    echo $indice.": ".$dato."<br>";
}
?>