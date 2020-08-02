<?php

function puntero($arrayIntroducido, $dato){
        $datos=$arrayIntroducido;
        $encontrado= false;
        foreach ($datos as $indice => $valor){
                if($valor==$dato){
                    $encontrado = true;

                    if($indice==0){
                        return false;
                    }else{
                       return $datos[$indice-1];
                    }

                }
            
        }
        if(!$encontrado){
            return false;
        }
        
}

$index=8;
$dtos = array (2,3,4,6,4,3,2,4);

echo puntero($dtos,$index);


?>