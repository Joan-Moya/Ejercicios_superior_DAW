<?php

$num=9;
$cont=0;

for($i=1; $i<=$num; $i++){

    if($num%$i==0){
        $cont++;
    }
}

if($cont>2){
    echo "el numero no es primo";
}else{
   echo "el numero es primo";
}

?>