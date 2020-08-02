<?php
    session_start();
    if($_SESSION['login'] != "SI") {
        header("Location: acceso.php");
    }else{

    $fechaguardada = $_SESSION['acceso'];
    $ahora = time();
    $tiempotranscurrido = $ahora-$fechaguardada;

    if ($tiempotranscurrido >= 600) {
            session_destroy();
            header("Location: acceso.php");
        }else{
            $_SESSION['acceso'] = $ahora;
        }
    }
?>  