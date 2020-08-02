<?php
function importe_facturas(){
    $totalFacturas=0;
    $num_args = func_num_args(); //nos dice en cuantos parametros hemos llamado la funcion
    echo $num_args."<br>";
    echo func_get_arg(2)."<br>"; //este nos devuelve un parametro determinado

    echo "<br>";
    $parametros=func_get_args();
    foreach($parametros as $pos => $valor){ //devolvemos os aprametros con su indice
        echo $pos.":".$valor."<br>";
        $totalFacturas += $valor;
    }
    echo "<br>";

    return $totalFacturas;
}

echo "El importe de las facturas es ".importe_facturas(1200,600,150,250,760)."<br>";
?>