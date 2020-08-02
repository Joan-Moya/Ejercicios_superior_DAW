<?php

     $numero1=1000;
     $numero2=300;
     $numeroMayor=0;
     $numeroMenos=0;

    
    if($numero1 != $numero2){

        if($numero1>$numero2){
            $numeroMayor=$numero1;
            $numeroMenor=$numero2;
        }else{
            $numeroMenor=$numero1;
            $numeroMayor=$numero2;
        }

        do{
            echo $numeroMenor."<br>";
            $numeroMenor+=7;
        }while($numeroMenor<$numeroMayor);

    }else{
        echo"Los numeros son iguales!!!";
    }



?>