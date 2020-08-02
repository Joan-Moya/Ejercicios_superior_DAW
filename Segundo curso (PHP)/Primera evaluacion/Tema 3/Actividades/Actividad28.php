<?php

$horasTrabajadas=80;
$horasOrdinarias=0;
$horasNoOrdinarias=0;
$totalDinero=0;

if($horasTrabajadas>=40){
    $horasOrdinarias=40;
    $horasNoOrdinarias=$horasTrabajadas-40;
    $totalDinero=$horasOrdinarias*12;
    $totalDinero+=$horasNoOrdinarias*16;
}else{
    $totalDinero=$horasOrdinarias*12;
}

echo "El sueldo del empleado es de: ".$totalDinero;

?>