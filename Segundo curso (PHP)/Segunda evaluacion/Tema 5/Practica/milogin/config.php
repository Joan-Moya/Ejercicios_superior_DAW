<?php
//inicio de sesión
session_start();
//incluye libreria cliente de Google
include_once 'lib/Google_Client.php';
include_once 'lib/contrib/Google_Oauth2Service.php';
// Credenciales de Google para el Acceso Autenticado por Google
//Google cliente ID
$clientId = '884360358822-5chb54vcf19h9ktug5j83ihfq4uea2ln.apps.googleusercontent.com';
//Google cliente secreto
$clientSecret = 'BZVyNFnLrNOTG-cav4zVk28W';
//URL de redirección
$redirectURL = 'http://localhost/milogin/index.php';
//Instancia y configuración de la API de Google
$cliente = new Google_Client();
$cliente->setApplicationName('Acceso OAuth');
$cliente->setClientId($clientId);
$cliente->setClientSecret($clientSecret);
$cliente->setRedirectUri($redirectURL);
$google_oauthV2 = new Google_Oauth2Service($cliente);
?>