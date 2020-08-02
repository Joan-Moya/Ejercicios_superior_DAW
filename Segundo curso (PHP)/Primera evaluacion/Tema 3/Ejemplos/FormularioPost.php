<?php
 if(isset($_POST['Enviar'])){
    $nombre=$_POST['nombre'];
    $edad=$_POST['edad'];
    echo "El nombre es ".$nombre." y tiene ".$edad." años";
 }else{
     echo "No vienes del formulario";
 }
?>