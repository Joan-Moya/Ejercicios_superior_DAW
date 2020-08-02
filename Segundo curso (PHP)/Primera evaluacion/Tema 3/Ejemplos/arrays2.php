<?php

$alumnos=array("Ana","Luis","Maria","Montse","Raquel","Rosa","Sara");

$valor_buscado ="Raquel";
$busca= array_search($valor_buscado,$alumnos);

if($busca===false){
    echo "Elemento no encontrado";

}else{
    echo "La posición es ".$busca;
}

echo "<hr>";

//ordenar valores de array de manera ascendente

echo "Ondenar valores de array de manera ascendente <br>";
$numeros = array (5,8,2,4,1,9,7,0);
sort($numeros);
foreach($numeros as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";

//ordenar valores de array de manera descendente

echo "Ordenar valores de array de manera descendente <br>";
$numeros = array (5,8,2,4,1,9,7,0);
rsort($numeros);
foreach($numeros as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";

//ordenar valores de array de manera ascendente repetando los indices

echo "ordenar valores de array de manera ascendente repetando los indices <br>";
$numeros = array (5,8,2,4,1,9,7,0);
asort($numeros);
foreach($numeros as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";

//ordenar los indices de los valores de manera ascendente

echo "ordenar los indices de los valores de manera ascendente <br>";
$numeros = array (7=>5, 6=>8, 9=>2, 3=>4, 2=>1, 8=>9, 5=>7, 4=>10);
ksort($numeros);
foreach($numeros as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";

//ordenar los indices de los valores de manera descendente

echo "ordenar los indices de los valores de manera descendente <br>";
$numeros = array (7=>5, 6=>8, 9=>2, 3=>4, 2=>1, 8=>9, 5=>7, 4=>10);
krsort($numeros);
foreach($numeros as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";

//current o pos es para que me muestre en que posicion esta el puntero
echo "current es para que me muestre en que posicion esta el puntero <br>";
$numeros = array (7=>5, 6=>8, 9=>2, 3=>4, 2=>1, 8=>9, 5=>7, 4=>0);
echo current($numeros);

echo "<hr>";

//key es para que me muestre en que posicion esta el puntero en el indice
echo "current es para que me muestre en que posicion esta el puntero <br>";
$numeros = array (7=>5, 6=>8, 9=>2, 3=>4, 2=>1, 8=>9, 5=>7, 4=>0);
echo key($numeros);


echo "<hr>";

//next es para que el puntero avance una posicion y me la muestre, y se queda en esa posicion
echo "current es para que me muestre en que posicion esta el puntero <br>";
$numeros = array (7=>5, 6=>8, 9=>2, 3=>4, 2=>1, 8=>9, 5=>7, 4=>0);
echo next($numeros);

echo "<hr>";

//prev es para que el puntero vaya una posicionhacia atras
echo "prev es para que el puntero vaya una posicionhacia atras <br>";
$numeros = array (7=>5, 6=>8, 9=>2, 3=>4, 2=>1, 8=>9, 5=>7, 4=>0);
next($numeros);
next($numeros);
echo prev($numeros);

echo "<hr>";

//end es para volver al principio
echo end($numeros);

echo "<hr>";

//reset es para ir al final
echo reset($numeros);

echo "<hr>";

//sizeof para ver cuantas posiciones tiene el array
echo sizeof($numeros);

echo "<hr>";

//vamos a ver cuantas posiciones tiene coche
echo "vamos a ver cuantas posiciones tiene coche <br>";
$coches = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo sizeof($coches)."<br>";
echo sizeof($coches,1)."<br>"; //cuando ponemos el 1 es para decirle que es multidimensional y nos lo cuenta todo

echo "<hr>";
//ahora para ver cuantos elementos hay en cada posicion del array
echo (sizeof($coches,1)-sizeof($coches))."<br>";
?>