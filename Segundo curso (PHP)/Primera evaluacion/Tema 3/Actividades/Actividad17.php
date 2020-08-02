<?php

$sumaSueldos=0;
$contadorMayores=0;
$array = array(array("Alberto",900)
            ,array("Joan",2000)
            ,array("Pepe",3200));

            foreach($array as $empleado){
                $sumaSueldos+=$empleado[1];

                if($empleado[1]>1000){
                    echo "El empleado ".$empleado[0]." tiene un sueldo mayor a 1000 <br>";
                    $contadorMayores++;
                }
                
            }
            
echo "<hr>";
echo "La suma total de los sueldos es de: ".$sumaSueldos."<br>";
echo "La cantidad de sueldos mayores de 1000 es de: ".$contadorMayores;
?>