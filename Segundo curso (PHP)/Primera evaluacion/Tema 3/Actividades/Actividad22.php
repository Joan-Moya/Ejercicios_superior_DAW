<?php

$sueldoMayor=0;

$facturas =  array(array(2000)
            ,array(600)
            ,array(1500)
            ,array(2200)
            ,array(1200));

            foreach($facturas as $valor){

                if($valor[0]>$sueldoMayor){
                    $sueldoMayor=$valor[0];

                }

            }
            echo "El sueldo mayor puesto es: ".$sueldoMayor;
?>