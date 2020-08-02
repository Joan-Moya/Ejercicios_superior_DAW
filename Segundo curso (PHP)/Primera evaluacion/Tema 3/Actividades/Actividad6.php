<?php

$array = array(2,3,5,-5,5,4,3,7,89);

foreach($array as $valor){ //la primera variable hace referecnai al array que queremos recorrer, la segunda es al variable donde almacena los valores del array en cada vuelta
    if($valor<0){
        break;
    }else{
        echo $valor*$valor."<br>";
    }
}

?>