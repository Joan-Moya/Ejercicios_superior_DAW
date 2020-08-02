<?php

function mayor($num1,$num2,$num3){

        if($num1>$num2 && $num1>$num3){
            return "El mayor es ".$num1;
        }else if($num2>$num3){
            return "El mayor es ".$num2;
        }else{
            return "El mayor es ".$num3;
        }
}
echo mayor(3,4,5);
?>