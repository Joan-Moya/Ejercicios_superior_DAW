<?php



$dia= $_POST['dia'];
$mes=  $_POST['mes'];
$anio=  $_POST['anyo'];

if (checkdate($mes, $dia, $anio)){
    echo "La fecha existe<br>";
}else{
echo "La fecha NO existe<br>";
}

?>