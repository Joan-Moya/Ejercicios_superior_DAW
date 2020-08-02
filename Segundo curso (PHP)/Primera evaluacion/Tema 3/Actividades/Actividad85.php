<?php

function carnets(){
    $totalCarnets=0;
    $num_args = func_num_args(); //nos dice en cuantos parametros hemos llamado la funcion
    echo "Total carnets introducidos: ".$num_args."<br>";
    echo "Carnet introducido en la posicion 2: ".func_get_arg(2)."<br>"; //este nos devuelve un parametro determinado
    echo "Carnet introducido en la posicion 5: ".func_get_arg(5)."<br>"; //este nos devuelve un parametro determinado


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Parametros";
    echo "<hr>";
    $parametros=func_get_args();
    foreach($parametros as $pos => $valor){ //devolvemos os aprametros con su indice
        echo $pos.":".$valor."<br>";
    }
    echo "<br>";

   
}

echo carnets("A1","B1","B2","C1","C2","C3");
?>