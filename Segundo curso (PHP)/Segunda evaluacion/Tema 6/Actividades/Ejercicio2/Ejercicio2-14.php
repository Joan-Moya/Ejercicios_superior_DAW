
<form action="" method="post">
            Pon El nombre del fichero: <input type="text" name="nombrePuesto"><br>
            Pon El contenido del mismo: <input type="text" name="contenido"><br>
            <input type="submit" value="Comprobar">
    </form>
<?php

$fichero = $_POST["nombrePuesto"];
$datos = $_POST["contenido"];
date_default_timezone_set('Europe/Madrid');

        if(file_exists($fichero)){
            echo  nl2br(file_put_contents($datos));
        }else{
             $mensaje = "El archivo no existe";
        }
?>s