<?php

$mayoresAltura;//aqui guardamos los alumnos que tienen la altura mayor a 175
$sumaedad=0;
$sumaEstatura=0;
$mayoresEdad=0;
$contadorMayores=0;
$array = array(array("Alberto",17,170)
            ,array("Joan",19,180)
            ,array("Pepe",14,150)
            ,array("Alberto",15,160)
            ,array("Javier",19,190));

            foreach($array as $valor){
                $sumaedad+=$valor[1];//aqui vamos sumando la edad
                $sumaEstatura+=$valor[2];//aqui vamos sumando las alturas 

                if($valor[1]>18){//aqui vamos a ver cuantos alumnos son mayores de edad
                    $mayoresEdad++;
                }

                if($valor[2]>175){
                    $mayoresAltura++;
                }
                
            }
    echo "Cantidad de alumnos mayores de edad: ".$mayoresEdad."<br>";
    echo "Cantidad de alumnos mayores a 1.75cm: ".$mayoresAltura."<br>";
    echo "La edad media de los alumnos es: ".($sumaedad/5)."<br>";
    echo "La estatura media de los alumnos es: ".($sumaEstatura/5)."<br>";

?>