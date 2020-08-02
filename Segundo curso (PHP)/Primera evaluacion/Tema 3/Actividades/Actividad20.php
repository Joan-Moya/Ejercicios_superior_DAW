<?php


$facturacionTotal=0;
$cantidadLitrosFactura1=0;
$cantidadMayor600=0;


$facturas =  array(array(1,200,6)// codigo,cantidad vendida en litros, precio por litro
            ,array(2,400,6)
            ,array(3,500,6)
            ,array(1,600,6)
            ,array(3,800,6));


            foreach($facturas as $valor){
             
                if($valor[0]==1){
                    $cantidadLitrosFactura1+=$valor[1];//aqui guardamos la cantidad de litros vendidos en la primera factura
                }

                $facturacionTotal+=($valor[1]*$valor[2]);

                if(($valor[1]*$valor[2])>600){
                    $cantidadMayor600++;//aqui vamos sumando si la factura 
                }
            }
            echo "El total de todas las facturas es de: ".$facturacionTotal."<br>";
            echo "La cantidad de litros vendidos en la factura 1 es de: ".$cantidadLitrosFactura1."<br>";
            echo "La cantidad de facturas con mas de 600 euros son: ".$cantidadMayor600;
          
?>