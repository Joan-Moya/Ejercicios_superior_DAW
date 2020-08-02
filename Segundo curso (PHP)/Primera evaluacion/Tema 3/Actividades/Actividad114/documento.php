<?php



$dia= $_POST['dia'];
$mes=  $_POST['mes'];
$anio=  $_POST['anyo'];

$dia2= $_POST['dia2'];
$mes2=  $_POST['mes2'];
$anio2=  $_POST['anyo2'];

$dia3= $_POST['dia3'];
$mes3=  $_POST['mes3'];
$anio3=  $_POST['anyo3'];


$fecha1= mktime(0,0,0,$mes,$dia,$anio);
$fecha2= mktime(0,0,0,$mes2,$dia2,$anio2);
$fecha3= mktime(0,0,0,$mes3,$dia3,$anio3);

if($fecha1>$fecha2 && $fecha1>$fecha3){
    echo "La primera fecha  es la mayor";
}else if($fecha2>$fecha3){
    echo "La segunda fecha es la mayor";
}else {
    echo "La tercera fecha es la mayor";
}

echo "<br>";

if($fecha1<$fecha2 && $fecha1<$fecha3){
    echo "La primera fecha es la menor";
}else if($fecha2<$fecha3){
    echo "La segunda fecha es la menor";
}else{
    echo "La tercera fecha es la menor";
}


?>