<?php

$cantSuspensos=0;

$notas = array(5,6,3,4,7,8,9,2,1,6);

 foreach($notas as $valor){

    if($valor<5){
        $cantSuspensos++;
    }
 }
          echo "cantidad de suspendidos: ".$cantSuspensos++;
?>