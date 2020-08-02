<?php

$aprobados=0;
$suspendidos=0;

$notas =  array(array(5)
            ,array(4)
            ,array(9)
            ,array(3)
            ,array(5));

            foreach($notas as $valor){

                if($valor[0]>=5){
                    $aprobados++;
                }else{
                    $suspendidos++;
                }

            }
            echo "Hay ".$aprobados." alumnos aprobados"."<br>";
            echo "Hay ".$suspendidos." alumnos suspendidos"."<br>";
?>