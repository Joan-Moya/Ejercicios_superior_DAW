<?php
	if(($_POST['usuario']=="jose") && ($_POST['pass']=="123456")){
		session_start();
		$_SESSION["autentificado"]="SI";
		header ("Location: aplicacion.php");
	} else {
		header ('Location: auten.php?errorusuario=si');
	}
?>