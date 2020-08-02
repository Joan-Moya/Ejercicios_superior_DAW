<?php
	session_id('misesion');								//Damos id a la sesion que vamos a crear

	session_start();									//Creamos la sesion
	echo "El ID de sesion es: ".session_id()."<br>";	

	$_SESSION['color']="azul";							//Creamos variable de sesion de color
	echo "<a href='pag_session_2.php'>Enlace</a>";
?>