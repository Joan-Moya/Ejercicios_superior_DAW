<?php

    $nombre=$_POST['nombre']; //aqui recibimos el nombre del formulario
   
    setcookie("nombreCookie",$nombre,time()+60);


    echo "Hola ".$_COOKIE['nombreCookie']."!";
?>