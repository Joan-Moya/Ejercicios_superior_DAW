<?php

	//Abrir conexion a la base de datos
	function conectar(){
		try {
			$params = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
			$conexion = new PDO("mysql::host=localhost; dbname=videoclub","root","root",$params);
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conexion;
		} catch (PDOException $excepcion) {
			exit($excepcion->getMessage());
		}
	}

	//Obtener parametros para updates e inserts
	function obtenerParametros($parametros) {
		$arrayParametros = [];
		foreach($parametros as $parametro => $valor) {
			$arrayParametros[] = "$parametro=:$parametro";
		}
		return implode(", ", $arrayParametros);
	}

	//Asociar todos los parametros a un sql
	function asignarValorParametros($sentencia, $arrayParametros) {
		foreach($arrayParametros as $parametro => $valor) {
			$sentencia->bindValue(':'.$parametro, $valor);
		}
		return $sentencia;
	}

?>
