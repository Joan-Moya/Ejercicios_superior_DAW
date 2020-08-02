<?php
//ahora vamos a meter elementos en array multidimensional

echo "El push añade al final de array elementos <br>";
$numeros=array(5,8,2,4,1,9,7,0);
array_push($numeros,23,19,12);

foreach($numeros as $valor){
    echo $valor."<br>";
}

echo "<hr>";
echo "unshift añade valores al principio del array <br>";

array_unshift($numeros,34,39,52);

foreach($numeros as $valor){
    echo $valor."<br>";
}

//eliminamos del array el ultimo elemento
echo "<hr>";
$ultimo=array_pop($numero)."<br>";
//print_r te muestra el array
print_r($numeros);

?>