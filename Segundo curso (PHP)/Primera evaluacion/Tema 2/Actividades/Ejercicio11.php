<?php

        $codigo=1;
        $nombre="Tom";
        $apellido="Smith";
        $puesto="Vendedor";
        $sueldo=7500;
        $edad=26;
        $num_hijos=0;
        $sucursal="New York";

        $retencionSueldo=0;

        //calculamos la retencion1
        if(($vendedor == "Vendedor") && ($sueldo>70000)){
                $retencionSueldo=$sueldo*0.10;
        }else{
            $retencionSueldo=$sueldo*0.20;
        }
        
        //calculamos la retencion2
        if(($edad>50) && ($num_hijos>2)){
            $retencionSueldo=$sueldo*0.05;
        }else{
            $retencionSueldo=$sueldo*0.10;
        }

        //calculamos la retencion3
        if($sueldo>50000 && $sueldo<80000){
            $retencionSueldo=$sueldo*0.05;
        }else{
            $retencionSueldo=$sueldo*0.12;
        }

        //calculamos la retencion4
        if($numero_hijos=1 && $num_hijos=2){
            $retencionSueldo=$sueldo*0.10;
        }else{
            $retencionSueldo=$sueldo*0.05;
        }

        //calculamos retencion5
        if($sueldo>80000 && $num_hijos=0){
            $retencionSueldo=$sueldo*0.15;
        }else{
            $retencionSueldo=$sueldo*0.05;
        }
?>