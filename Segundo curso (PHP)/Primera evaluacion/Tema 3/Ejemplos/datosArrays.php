<?php

$numeros=array(5,8,2,4,1,9,7,0);
$parte_numeros= array_slice($numeros,3); //vamos a extraer desde la posicion 3 hasta el final
foreach($parte_numeros as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";

$numeros=array(5,8,2,4,1,9,7,0);
$inverso= array_reverse($numeros,3); //nos devuelve el array inverso
foreach($parte_numeros as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<br>";

$numeros=range(30,45);
foreach($numeros as $indice => $valor){ //nos crea un array, rango entre esos dos numeros
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";

$marcas = array("Ford","Seat","Ford","Opel","Ford","Opel","Opel"); 
$frecuencia = array_count_values($marcas); //devuelve un array en el que el index es las veces que se repite algo
foreach($frecuencia as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";

$numeros = array (1,2,3,1,2,3,4,2,3,4,3);
    if (in_array(10,$numeros)){ //nos dice si un numero existe dentro del array o no
        echo "Existe";
    }else{
        echo "No existe";
    }

echo "<hr>";

$numeros = array (1,2,3,1,2,3,4,2,3,4,3);
echo (in_array(4,$numeros))?"Exise":"No existe";


echo "<hr>";

$alumnos1= array("Luis","Pedro","Ana");
$alumnos2= array("Marta","Rosa","Angel");
$alumnos = array_merge($alumnos1,$alumnos2); //unimos dos arrays
foreach($alumnos as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";

$empleados = array (
    array("Luis Sanz Olta",32,"Administracion"),
    array("Pedro Mas Moreno",41,"Ventas"),
    array("Ana Mata Solis",19,"Ventas"),
    array("Sonia Caballer Ros",23,"Informatica")
);

$edades;
foreach($empleados as $indice => $valor){ //nos ordena array multidimensionales
    $edades[$indice]=$valor[1];
}

array_multisort($edades,SORT_ASC,$empleados);

foreach($empleados as $empleado){
    foreach ($empleado as $valor){
        echo $valor." - ";
    }
    echo "<br>";
}
?>