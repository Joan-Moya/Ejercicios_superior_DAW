<?php

$Trabajadores= array(array("Luis",12000),
    array("Ana",15000),
    array("Angel",23000),
    array("Rosa",26000));

    echo "<pre>";
        foreach($Trabajadores as $valor){

            echo str_pad($valor[0],10," ",STR_PAD_RIGHT).str_repeat("X",$valor[1]/1000)."<br>";
        }
    echo "</pre>";
?>