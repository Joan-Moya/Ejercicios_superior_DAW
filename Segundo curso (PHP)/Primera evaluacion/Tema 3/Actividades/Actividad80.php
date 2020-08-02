<?php

$administracion = array ("Luis","Ana","Angel","Maria");
$informatica = array ("Pedro","Rosa","Robero");

$total = array_merge($administracion,$informatica); //unimos dos arrays

foreach($total as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}


?>