<?php

    $poblacion=$_POST['poblacion'];
    $categoria=$_POST['categoria'];
    $idioma=$_POST['nivelIdioma'];
    
    if(isset($_POST['Check'])){
        $check = "si";
        }else{
            $check ="no";
        }
        
    
    $sueldo=1000;


    if($poblacion=="Valencia"){
    }else{
        $sueldo=$sueldo+2000;
    }
    
    echo "El sueldo del empleado es= ".$sueldo."<br>";
    echo "Su categoria laboral es= ".$categoria."<br>";
    echo "su nivel de ingles es= ".$idioma."<br>";
    echo "El empleado ".$check." posee discapacidad";

?>