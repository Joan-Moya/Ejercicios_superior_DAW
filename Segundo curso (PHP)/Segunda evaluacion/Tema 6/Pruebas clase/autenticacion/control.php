<?php
	if((isset($_POST['usuario'])) && (isset($_POST['pass']))){
		$usuario=$_POST['usuario'];
		$password=$_POST['pass'];
		$host="localhost";
		$user="root";
		$pass="root";
		$base="acceso";
		$conexion = mysqli_connect($host, $user, $pass, $base);
		mysqli_query($conexion, "SET NAMES 'utf8'");
		// ' OR '1'='1
		//$usuario = mysqli_real_escape_string($conexion, $_POST["usuario"]);
		//$password = mysqli_real_escape_string($conexion, $_POST["pass"]);
		//echo $usuario."<br>";
		//echo $password."<br>";
		
		$sentencia = "SELECT * FROM usuarios where usuario='$usuario'";
		//echo $sentencia;
		$resultado = mysqli_query($conexion, $sentencia);
		$clave="";
		while($registro=mysqli_fetch_assoc($resultado)){
			$clave=$registro['password'];
		}
		$numRegistros=mysqli_num_rows($resultado);
		mysqli_close($conexion);
		if (($numRegistros>0) && (password_verify($password, $clave))){
			session_start();
			$_SESSION['autentificado']="SI";
			$_SESSION['acceso'] = time();
			header("location:aplicacion.php");		
		} else {
			header("location:acceso.php?error=si"); 			
		}
	}else{
		header("location:acceso.php?error=si"); 
	}
?>


