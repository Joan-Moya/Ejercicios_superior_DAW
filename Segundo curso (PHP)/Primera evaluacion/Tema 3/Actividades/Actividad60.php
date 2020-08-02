<?php

$alumnos = array ("Luis"=>4.5,"Pedro"=>7.3,"Ana"=>8.5,"Rosa"=>3.1,"Angel"=>1.5,"Maria"=>6.5,"Sara"=>9.1,"Roberto"=>3.5);

arsort($alumnos); 


foreach($alumnos as $indice => $dato){

    echo $indice.": ".$dato."<br>";
}
?>