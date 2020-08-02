<?php

    $poblacion=$_POST['poblacion'];
   
    
    $sueldo=1000;


    if($poblacion=="Valencia"){
    }else{
        $sueldo=$sueldo+2000;
    }
    
    echo "El sueldo del empleado es= ".$sueldo;

?>