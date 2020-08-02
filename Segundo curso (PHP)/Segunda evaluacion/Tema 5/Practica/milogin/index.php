<?php
// Include del fichero de creación de instancia y configuracion
// de la API de Autenticación de Google
include_once 'config.php';
// Si existe el parámetro code significa que hemos accedido
// por medio de google y almacenamos el Token o codigo de
// sesion en una Variable de Sesión
// y redireccionamos a nuestra página index.php
if(isset($_GET['code'])){
$cliente->authenticate($_GET['code']);
$_SESSION['token'] = $cliente->getAccessToken();
header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}
// Almacenamos el token de sesión devuelto por google en el
// obejto de conexión $cliente que creamos en la configuración
if (isset($_SESSION['token'])) {
$cliente->setAccessToken($_SESSION['token']);
}
// Si tenemos asignado un token de sesión es que nos hemos autenticado
// y guardamos los datos del perfil de google en un array a traves de
// la sentencia get()
if ($cliente->getAccessToken()) {
//Almacena los datos del perfil de usuario de google
$usuarioPerfil = $google_oauthV2->userinfo->get();
//Inserta los datos de usuario en un array $datosUsuario
$datosUsuario = array(
'tipoAut' => 'google',
'idAut' => $usuarioPerfil['id'],
'nombre' => $usuarioPerfil['given_name'],
'apellidos' => $usuarioPerfil['family_name'],
'correo' => $usuarioPerfil['email'],
'sexo' => $usuarioPerfil['gender'],
'pais' => $usuarioPerfil['locale'],
'foto' => $usuarioPerfil['picture'],
'enlace' => $usuarioPerfil['link']
);
//Si el array $datosUsuario no está vacio es que tenemos almacenados
// los datos del perfil del usuario y los asignamos a una variable
// $salida junto con el enlace al perfil de google y el enlace
// a Cerrar la Sesión
if(!empty($datosUsuario)){
$salida = '<h1>Perfil de Usuario</h1>';
$salida .= '<img src="'.$datosUsuario['foto']
.'" width="100" height="100"><hr>';
$salida .= 'ID Google: ' . $datosUsuario['idAut'].'<br/>';
$salida .= 'Nombre: ' . $datosUsuario['nombre']
.' '.$datosUsuario['apellidos'].'<br/>';
$salida .= 'Correo: ' . $datosUsuario['correo'].'<br/>';
$salida .= 'Sexo: ' . $datosUsuario['sexo'].'<br/>';
$salida .= 'Pais: ' . $datosUsuario['pais'].'<br/>';
$salida .= 'Tipo de Autenticación: '
.$datosUsuario['tipoAut'].'<hr>';
$salida .= '<a href="'.$datosUsuario['enlace']
.'" target="_blank">Perfil Google+</a><br/>';
$salida .= '<a href="logout.php">Logout</a><br/>';
}else{
// Si el array $datosUsuario está vacio es que no
// hemos podido acceder a los datos del perfil de
// Google y mostramos el error. 
$salida = '<h3 style="color:red">Se ha producido un Error!!!
Vuelva a intentarlo</h3>';
}
} else {
// Si no tenemos asignado un token de sesión es que no nos
// hemos podido autenticar o todavía no lo hemos intentado
// y nos muestra un texto con un enlace a la
// página de google para autenticarnos ( createAuthUrl() )
$authUrl = $cliente->createAuthUrl();
$salida = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL)
.'">Autenticación mediante Google</a>';
}
?>
<!- Página web que muestra el contendido de $salida que es el enlace de
acceso, los datos del usuario o el error de acceso según la situación -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Autenticación mediante Cuenta de Google</title>
</head>
<body>
<!-- Vuelca el contenido de la variable $salida -->
<div><?php echo $salida; ?></div>
</body>
</html>