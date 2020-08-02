<?php
//Incluye fichero de configuración
include_once 'config.php';
//Elimina la variable token and datosUsuario de la sesion
unset($_SESSION['token']);
unset($_SESSION['datosUsuario']);
// Resetea token de acceso OAuth
$cliente->revokeToken();
// Destruye la sesión
session_destroy();
// Redirecciona a la página principal
header("Location:index.php");
?>