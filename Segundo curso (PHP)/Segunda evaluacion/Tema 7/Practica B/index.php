<?php
	include "utils.php";
	$conexion =  conectar();
	
	// Listar todos los posts o solo uno
	// $_SERVER['REQUEST_METHOD'] devuelve el método de solicitud 
	// utilizado para acceder a la página

	// Si el método es GET permite consultar uno registro 
	// si hemos pasado su id como parámetro o listar todos si
	// no hemos pasado parámetro id
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {		
		if (isset($_GET['codigo'])){
			//Crea y ejecuta sentencia SQL para mostrar un post
			$sql = $conexion->prepare("SELECT * FROM peliculas where codigo=:codigo");
			$sql->bindValue(':codigo', $_GET['codigo']);
			$sql->execute();
			// Cuando un navegador solicita un servicio de un servidor web
			// el servidor devuelve el estado HTTP de la solicitud: 200 OK 
			// significa que todo ha ido bien y se devuelven los datos solicitados
			header("HTTP/1.1 200 OK");
			// Codifica el resultado de la consulta en formato Json 
			echo json_encode($sql->fetch(PDO::FETCH_ASSOC));
			exit();
		} else {
			//Crea y ejecuta sentencia SQL para mostrar un post
			$sql = $conexion->prepare("SELECT * FROM peliculas");
			$sql->execute();
			// Cuando un navegador solicita un servicio de un servidor web
			// el servidor devuelve el estado HTTP de la solicitud: 200 OK 
			// significa que todo ha ido bien y se devuelven los datos solicitados
			header("HTTP/1.1 200 OK");
			// Codifica el resultado de la consulta en formato Json 
			echo json_encode( $sql->fetchAll(PDO::FETCH_ASSOC));
			exit();
		}
	}

	// Inserta un post en la tabla de datos
	// $_SERVER['REQUEST_METHOD'] devuelve el método de solicitud 
	// utilizado para acceder a la página

	// Si el método es POST permite insertar un registro 
	// Recupera en $datos el array de parámetros pasado por POST
	// y creamos y ejecutamos la sentencia INSERT 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$datos = $_POST;
		$sql = "INSERT INTO peliculas
			(codigo,titulo,tema,precio,duracion,cmoral)
			VALUES
			(:codigo, :titulo, :tema, :precio, :duracion, :cmoral)";
		$sentencia = $conexion->prepare($sql);
		// asignamos los valores obtenido por POST a los parámetros
		asignarValorParametros($sentencia, $datos);
		$sentencia->execute();
		// Obtenemos el id del registro insertado
		// o false si no se ha podido insertar
		$ultimoId = $datos["codigo"];
		// Si se ha podido insertar el registro
		if($ultimoId) {
			// añadimos el id asignado al array y devolvemos OK 200 como 
			// que todo ha ido correctamente y el registro insertado en formato Json
			header("HTTP/1.1 200 OK");
			echo json_encode($datos);
			exit();
		}
	}

	// Borrar registro de la tabla
	// Si el método es DELETE permite borrar un registro 
	// Recupera el id enviado por GET y
	// creamos y ejecutamos la sentencia INSERT 
	if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		$id = $_GET['codigo'];
		$sentencia = $conexion->prepare("DELETE FROM peliculas where codigo=:codigo");
		$sentencia->bindValue(':codigo', $id);
		$filas=$sentencia->execute();
		// almacenamos en $registros el número de filas afectadas por la última sentencia SQL
		$datos['registros'] = $sentencia->rowCount();
		// Devolvemos OK 200 como que todo ha ido correctamente y 
		// el número de registros eliminados
		header("HTTP/1.1 200 OK");
		echo json_encode($datos);
		exit();
	}

	// Actalizar registro de la tabla
	// Si el método es PUT permite actualizar un registro 
	// Recupera el array de datos enviado por GET en $datos y el id en $id 
	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		$datos = $_GET;
		$id = $datos['codigo'];
		// Obtenenmos la asignación de campos y valores para la sentencia UPDATE
		$camposValores = obtenerParametros($datos);
		$sql = "
			UPDATE peliculas
			SET $camposValores
			WHERE codigo='$id'
		";
		// creamos y ejecutamos la sentencia UPDATE
		$sentencia = $conexion->prepare($sql);
		asignarValorParametros($sentencia, $datos);
		$sentencia->execute();
		// almacenamos en $registros el número de filas afectadas por la última sentencia SQL
		$datos['registros'] = $sentencia->rowCount();
		// Devolvemos OK 200 como que todo ha ido correctamente y 
		// el número de registros eliminados
		header("HTTP/1.1 200 OK");
		echo json_encode($datos);
		exit();
	}

	// En caso de que ninguna de las opciones anteriores se haya ejecutado
	// devolvemos el mensaje 400 La solicitud no se puede procesar debido a un error de sintaxis
	header("HTTP/1.1 400 Bad Request");
?>