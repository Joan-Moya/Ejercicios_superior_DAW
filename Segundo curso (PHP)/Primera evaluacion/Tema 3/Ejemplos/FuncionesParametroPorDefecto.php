<?php
function dto($importe = 1000, $dto = 0.10){
    return $importe * $dto;
}

echo "El descuento es ".dto(100,0.20)."<br>";
echo "El descuento es ".dto(100)."<br>";
echo "El descuento es ".dto()."<br>";

?>