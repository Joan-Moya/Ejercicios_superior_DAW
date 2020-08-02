<?php
	session_start();
	session_destroy();
	echo "Gracias por visitar la zona segura<br>";
	echo "<a href='acceso.php'>Volver al formulario</a>";
?>