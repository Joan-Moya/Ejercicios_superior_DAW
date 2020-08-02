<?php

$hora=6;

if($hora>=6 && $hora<=12){
    echo "Buenos dias";
}else if($hora>=13 && $hora<=20){
    echo "Buenas tardes";
}else if($hora>20 || $hora<=5){
    echo "Buenas noches";
}else if($hora>24){
    echo "La hora esta mal introducida";
}


?>