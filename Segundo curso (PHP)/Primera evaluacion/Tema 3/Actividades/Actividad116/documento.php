<?php



$dia= $_POST['dia'];
$mes=  $_POST['mes'];
$anio=  $_POST['anyo'];


$fecha= date($dia,$mes,$anio);

$tiempo = strtotime($fecha);
$ahora = time(); 
$edad = ($ahora-$tiempo)/(60*60*24*365.25);

echo "Tiene ".round($edad)." anios";

?>