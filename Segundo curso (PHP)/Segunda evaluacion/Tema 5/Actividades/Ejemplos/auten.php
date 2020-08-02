<form action="control.php" method="post">
	Usuario: <input type="text" name="usuario" size="8" maxlength="50"><br>
	Password: <input type="password" name="pass" size="8" maxlength="50"><br>
	<input type="submit" name="Acceso">
</form>

<?php
	if(isset($_GET['errorusuario'])){
		if ($_GET['errorusuario']=="si"){
			echo "Acceso Incorrecto";
		}
	} else{
		echo "Introduzca los datos de acceso";
	}
?>