<?php



$dia= $_POST['dia'];
$mes=  $_POST['mes'];
$anio=  $_POST['anyo'];

$fechaPuesta= date($dia,$mes,$anio);
$fechaHoy= time();

if($anio<2018){
    echo "El anio no es valido";
}else if($fechaHoy>$fechaPuesta){
    echo "El producto esta caducado";
}else{
    echo "El producto no esta caducado";
}

?>