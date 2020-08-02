<?php

function impFinal($precioProducto, $cantidadUnidades, $iva = 0.21, $descuento = 0.00){
    $total=$precioProducto*$cantidadUnidades;
    $importeDescuento = $total*$descuento;
    $importeIva = ($total - $importeDescuento)*$iva;
    $calculo= $total-$importeDescuento+$importeIva;
    return $calculo;
}

echo "Total: ".impFinal(6,500);


?>