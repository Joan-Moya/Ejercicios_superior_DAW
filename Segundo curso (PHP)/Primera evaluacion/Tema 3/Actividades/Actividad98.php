<?php

$texto1= "Pedro-Luis-Ana-Rosa-Angel";

$txtoArray= explode("-",$texto1);

foreach($txtoArray as $valor){
    echo $valor."<br>";
}

?>