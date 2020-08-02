<?php
	session_id('sesion1');								//Damos id a la sesion que vamos a crear

	session_start();									//Creamos la sesion
	echo "El ID de sesion es: ".session_id()."<br>";	

	$_SESSION['horaEntrada'] = time();							//Creamos variable de sesion de tiempo
    echo "<a href='Salir.php'>Salir</a>";
    
    /*mi idea es asociarle a la sesion la hora local con el "localtime()" y luego en el otro fichero recuperarla
    en el otro archivo crear una variable con la hora del sistema, restarlas y sacar asi el timempo que se ha pasado
    en la web "Tiempo".*/
?>