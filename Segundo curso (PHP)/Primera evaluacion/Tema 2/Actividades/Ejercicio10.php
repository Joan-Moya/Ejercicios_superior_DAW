<?php

        define ("IVA",0.21);
        $precio=20;
        $productosAdquiridos=6;
        $importeBase=$productosAdquiridos*$precio;
        $importeDelIva=$productosAdquiridos*$precio*IVA;
        $importeFinal=$importeBase+$importeIva;

        echo "El precio del producto es: ".$precio."<br>";
        echo "Cantidad de productos adquiridos: ".$productosAdquiridos."<br>";
        echo "El importe base es de: ".$importeBase."<br>";
        echo "El importe del iva es: ".$importeDelIva."<br>";
        echo "El importe final es de: ".$importeDelIva;




?>