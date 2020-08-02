<?php
	session_start();
	session_destroy();
	echo "Gracias por su visita<br>";
	echo "<a href='auten.php'>Volver al formulario de autenticacion</a>";

?>