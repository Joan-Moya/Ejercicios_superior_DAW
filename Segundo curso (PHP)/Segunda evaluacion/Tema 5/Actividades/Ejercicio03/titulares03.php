<?php

    $titularElejido=$_POST['titulares']; //aqui recibimos el nombre del formulario
   
    setcookie("nombreCookie",$titularElejido,time()+60);//aqui guardamos en la cookie que titular queremos ver


    echo "El titular elejido es: ".$_COOKIE['nombreCookie']."!";//imprimimos el nombre de la cookie que es el nombre del titular
?>