<?php


$num=5;
$cont=0;
$primo=0;
$noPrimo=0;

for($i=1; $i<=$num; $i++){

    if($num%$i==0){
        $cont++;
    }
}

if($cont>2){
    echo "el numero no es primo"."<br>";
    $noPrimo++;
}else{
   echo "el numero es primo";
   $primo++;
}

if($primo==1 && $num>0){
    for($cont=$num; $cont<100; $cont++){
        echo $num."<br>";
        $num++;
    }
}

?>