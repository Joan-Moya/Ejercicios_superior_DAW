<?php
$usuario = $_POST['usuario'];
$password = $_POST['pass'];

    if(($usuario=='ADMIN') && ($password=="PASS")){
        session_start();
        $_SESSION['login']="SI";
        $_SESSION['acceso']= time();
        header("Location: aplicacion.php");
    }else {
        header("Location: acceso.php?errorusuario=si");
}
?>      