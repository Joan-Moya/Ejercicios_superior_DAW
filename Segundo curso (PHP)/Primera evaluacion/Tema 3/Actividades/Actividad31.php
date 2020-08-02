<?php

$notas = array (5,7);
$media=0;


foreach($notas as $valor){
    $suma+=$valor;
}
$media=$suma/2;

if($media>=5){
    echo "Aprobado= ".$media;
}else{

}
?>