<?php
	session_start();			//mantenemos la sesion
	session_unset();			//borramos la sesion
	session_destroy();			//destruimos la sesion
	if(isset($_SESSION['color'])){
		echo "variable existe y es: ".$_SESSION['color']."<br>";
	}	else {
		echo "Variable NO existe <br>";
	}
		echo "<a href='pag_session.php'>Volver Página Inicial</a>";
?>