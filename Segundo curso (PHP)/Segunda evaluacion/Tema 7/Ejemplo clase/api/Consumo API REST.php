<?php
	// Función que permite consultar/listar registros de la base de datos del servidor
	function get($url, $datos) {
		// Genera la cadena de parámetros que se incluirá en la url
		// a partir de los datos 
		$parametros = http_build_query($datos);
		// Inicia una nueva sesión cURL para conectar con el servidor pasando la url
		$curl = curl_init($url."?".$parametros);
		// Indica que el resultado de la ejecución lo almacene en $curl
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		// Ejecuta la petición HTTP
		$resultado = curl_exec($curl);
		// Cierra la sesión CURL
		curl_close($curl);
		// Decodifica y retorna el resultado obtenido de la petición del servidor
		// como array asociativo
		return json_decode($resultado, true);
	}

	// Función que permite insertar registro en la base de datos del servidor
	function post($url, $datos) {
		// Inicia una nueva sesión cURL para conectar con el servidor pasando la url
		$curl = curl_init($url);
		// Indica que el resultado de la ejecución lo almacene en $curl
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		// Realiza el envío por de datos al servidor por POST
		curl_setopt($curl, CURLOPT_POST, true);
		// Indica los que los datos almacenados en $datos se enviarán por POST 		
		curl_setopt($curl, CURLOPT_POSTFIELDS, $datos);
		// Ejecuta la petición HTTP		
		$resultado = curl_exec($curl);
		// Cierra la sesión CURL
		curl_close($curl);
		// Decodifica y retorna el resultado obtenido de la petición del servidor
		// como array asociativo
		return json_decode($resultado, true);
		
	}

	// Función que permite modificar registros de la base de datos del servidor
	function put($url, $datos) {
		// Genera la cadena de parámetros que se incluirá en la url
		// a partir de los datos 
		$parametros = http_build_query($datos);
		// Inicia una nueva sesión cURL para conectar con el servidor pasando la url
		$curl = curl_init($url."?".$parametros);
		// Indica que el resultado de la ejecución lo almacene en $curl
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
		// Indica que el resultado de la ejecución lo almacene en $curl
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		// Ejecuta la petición HTTP
		$resultado = curl_exec($curl);
		// Cierra la sesión CURL
		curl_close($curl);
		// Retorna el resultado obtenido de la petición del servidor
		return json_decode($resultado, true);
	}

	// Función que permite eliminar registros de la base de datos del servidor
	function delete($url, $datos) {
		// Genera la cadena de parámetros que se incluirá en la url
		// a partir de los datos 
 		$parametros = http_build_query($datos);
		// Inicia una nueva sesión cURL para conectar con el servidor pasando la url
		$curl = curl_init($url."?".$parametros);
		// Indica que el resultado de la ejecución lo almacene en $curl
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
		// Indica que el resultado de la ejecución lo almacene en $curl
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		// Ejecuta la petición HTTP
		$resultado = curl_exec($curl);
		// Cierra la sesión CURL
		curl_close($curl);
		// Retorna el resultado obtenido de la petición del servidor
		return json_decode($resultado, true);
	}

	// URL de la API
	$url = "http://localhost/api/index.php";

	
	/*Llamada a la funcion que permite Consultar
	$datos=array("id"=>1);
	$resultado = get($url, $datos);
	var_dump($resultado);
	echo "<hr>";
	
	/*
	// Llamada a la funcion que permite Listar
	$datos=array();
	$resultado = get($url, $datos);
	var_dump($resultado);	
	echo "<hr>";
	
	
	// Llamada a la funcion que permite Insertar
	$datos = array(
		"title" => "Ventajas del uso del HTML",
		"status" => "published",
		"content" => "Contenido del post del usuario 10",
		"user_id" => 10
	);
	$resultado = post($url, $datos);
	var_dump($resultado);
	echo "<hr>";

	/*
	// Llamada a la funcion que permite Eliminar
	$datos=array("id"=>24);
	$resultado = delete($url, $datos);
	var_dump($resultado);
	echo "<hr>";
	
	*/

	// Llamada a la funcion que permite Actualizar
	$datos = array(
		"status" => "draft",
		"id" => 3
	);
	$resultado = put($url, $datos);
	var_dump($resultado);
	echo "<hr>";
	
	
?>	
