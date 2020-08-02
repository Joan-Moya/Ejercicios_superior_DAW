<?php

       define ("Euro",166.386);
       $sueldoPesetas = 23000;
       $gasto = 300;

       $conversionPesetasEuros=$sueldoPesetas/Euro;
       $conversionEurosPesetas=$gasto*Euro;

       echo "Sueldo en pesetas convertido a Euros: ".number_format($conversionPesetasEuros,2,",",".")." &euro;<br>";
       echo "Gasto en euros convertido a pesetas: ".$conversionEurosPesetas;

?>