<?php
$precioOriginal=6;
    $codigoPromocional="nopro";
    $tipoIva="general";
    $descuento=0;

        
        echo "Base Imponible: ".$precioOriginal."<br>";


        
        
        if($odigoPromocional=="nopro"){
            $descuento=0;;
        }else if($codigoPromocional=="mitad"){
            $descuento=$precioOriginal/2;
        }else if($codigoPromocional=="meno5"){
            $descuento=$precioOriginal-5;
        }else if($codigoPromocional=="5porc"){
            $descuento=$precioOriginal*0.05;
        }
        
        echo "Precio con codigo promocional ".$codigoPromocional." es: ".$descuento."<br>";

        $precioConDescuento=$precioOriginal-$descuento;
        $importeIva=0;

        if($tipoIva=="general"){
             $importeIva=$precioConDescuento*0.21;
        }else if($tipoIva=="reducido"){
            $importeIva=$precioConDescuento*0.10;
        }else if($tipoIva=="superreducido"){
            $importeIva=$precioConDescuento*0.04;
        }

        echo "El iva ".$tipoIva." aplicado es: ".$importeIva."<br>";

         $precioFinal=$precioOriginal-$descuento+$importeIva;
         echo "El precio final es: ".$precioFinal;
?>