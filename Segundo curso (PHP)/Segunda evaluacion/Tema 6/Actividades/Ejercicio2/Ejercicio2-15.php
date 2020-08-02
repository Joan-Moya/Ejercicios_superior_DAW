
<form action="" method="post">
            Pon El nombre del fichero: <input type="text" name="nombrePuesto"><br>
            <input type="submit" value="Comprobar">
    </form>
<?php

$fichero = $_POST["nombrePuesto"];
date_default_timezone_set('Europe/Madrid');

        if(file_exists($fichero)){
            echo  nl2br(file_get_contents($fichero));
        }else{
             $mensaje = "El archivo no existe";
        }
?>