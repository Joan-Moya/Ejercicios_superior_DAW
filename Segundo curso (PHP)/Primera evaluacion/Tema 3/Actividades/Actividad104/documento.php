<?php

    $poblacion=$_POST['poblacion'];
    $categoria=$_POST['categoria'];
    
    $sueldo=1000;


    if($poblacion=="Valencia"){
    }else{
        $sueldo=$sueldo+2000;
    }
    
    echo "El sueldo del empleado es= ".$sueldo."<br>";
    echo "Su categoria laboral es= ".$categoria;

?>