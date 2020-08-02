<?php

$notas= array(9,8,9,1,7);
$sumaNotas=0;
$media=0;

foreach($notas as $valor){
    $sumaNotas+=$valor;
}

$media=$sumaNotas/5;

if($media<5){
    echo "Insuficiente ".$media;
}else if($media<6){
    echo "Suficiente ".$media;
}else if($media<7){
    echo "Bien ".$media;
}else if($media<9){
    echo "Notable ".$media;
}else{
    echo "Sobresaliente ".$media;
}

?>