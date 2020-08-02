<?php
session_start();
session_destroy();
echo "La sesion ha sido cerrada<br>";
echo "<a href= \"acceso.php\">Pulse para acceder alformulario</a><br>";
?>