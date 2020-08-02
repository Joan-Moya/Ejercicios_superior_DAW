<?php
$fechaPrincipal = time(); //he intuido que esa fecha era del sistema (como en las anteriores actividades)
$arrayfecha = getdate($fechaPrincipal); 

foreach($arrayfecha as $key => $valor){
    echo $key.": ".$valor."<br>";
}


?>