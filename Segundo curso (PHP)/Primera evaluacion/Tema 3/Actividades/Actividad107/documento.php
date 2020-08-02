<?php

    $nombre=$_POST['nombre'];
    $contra=$_POST['contraseña'];

    if($contra=="123"){
        echo "Acceso permitido";
    }else{
        echo "Acceso denegado";
    }
 

?>