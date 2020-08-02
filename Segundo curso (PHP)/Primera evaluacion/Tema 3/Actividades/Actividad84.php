<?php

function tamañoDisco($cantCilindros,$cantCabezas,$cantSectores,$tamañoSector = 512){
       $total = $cantCilindros*$cantCabezas*$cantSectores*$tamañoSector;
       return $total;
}

echo tamañoDisco(3,5,56); 


?>