<?php
	session_start();
	if(!isset($_SESSION['autentificado'])){
		header("location:acceso.php");
		exit();
	} else {
		$fechaguardada = $_SESSION['acceso'];
		$ahora = time();
		$tiempotranscurrido = $ahora - $fechaguardada;
		if($tiempotranscurrido>30){
			session_destroy();
			header("location:acceso.php?tiempomax=si");
		} else {
			$_SESSION['acceso']=$ahora;
		}
	}	
?>