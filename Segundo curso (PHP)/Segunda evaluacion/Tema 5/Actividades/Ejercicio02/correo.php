<?php
	if(isset($_COOKIE["url"])){
		echo("La url es: ".$_COOKIE["url"]);
		
	}else{
		echo("No se ha marcado 'recordar direccion'");
	}
?>