<form action="" method="post">
	Usuario: <input type="text" name="usuario"><br>
	Password: <input type="password" name="pass"><br>
	Nombre: <input type="text" name="nombre"><br>
	<input type="submit" name="alta" value="Alta"><br>
</form>

<?php
	if(isset($_POST['alta'])){
		// campo password de la base de datos VARCHAR(100)
		$usuario=$_POST['usuario'];
		$password=password_hash($_POST['pass'],PASSWORD_DEFAULT);
		//$password=$_POST['pass'];
		$nombre=$_POST['nombre'];
		$host="localhost";
		$user="root";
		$pass="root";
		$base="acceso";
		$conexion = mysqli_connect($host, $user, $pass, $base);
		mysqli_query($conexion, "SET NAMES 'utf8'");
		$sentencia = "INSERT INTO usuarios VALUES (null,'$usuario','$password','$nombre')";
		$resultado = mysqli_query($conexion, $sentencia);
		if(mysqli_affected_rows($conexion)>0){
			echo "Registro Insertado";
		} else {
			echo "Registro NO insertado";			
		}
		mysqli_close($conexion);
	}
?>
