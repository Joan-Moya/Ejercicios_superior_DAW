<form action="control.php" method="post">
	Usuario: <input type="text" name="usuario"><br>
	Password: <input type="password" name="pass"><br>
	<input type="submit" name="acceso" value="acceso"><br>
</form>

<?php
	if(isset($_GET['error'])){
		if($_GET['error']=="si"){
			echo "Acceso denegado";
		}
	} else if(isset($_GET['tiempomax'])){
		echo "Tiempo maximo excedido";
	} else {
		echo "Introduzca datos de acceso";	
	}
?>
