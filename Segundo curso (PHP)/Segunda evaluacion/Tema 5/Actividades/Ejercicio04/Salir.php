<?php
    session_start(); //recuperamos la sesion
    
    $tiempo1=$_SESSION['horaEntrada']; //guardamos en 1 variable la fecha guardada en tiempo

    $fecha2 = time(); //creamos otra fecha actual

    $tiempoTranscurrido= $fecha2-$tiempo1; //restamos ambas fechas para sacar el tiempo transcurrido

    echo "El tiempo transcurrido en la web es: ".$tiempoTranscurrido." segundos";
	
	unset($_SESSION['horaEntrada']);
	session_destroy();
	
?>