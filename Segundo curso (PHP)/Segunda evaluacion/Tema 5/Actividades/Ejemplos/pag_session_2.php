<?php
	session_start();			//mantenemos la sesion
	echo "El ID de sesion es: ".session_id()."<br>";			//Mostramos el valor de session_id()
	if(isset($_SESSION['color'])){
		echo "variable existe y es: ".$_SESSION['color']."<br>";
	}	else {
		echo "Variable NO existe <br>";
	}
		echo "<a href='pag_session_3.php'>Salir</a>";
?>