<form action="" method="post">
            Pon El nombre del fichero: <input type="text" name="nombrePuesto"><br>
            Pon los permisos que quieres que tenga <input type="text" name="permisos"><br>
            <input type="submit" value="Comprobar">
    </form>
<?php

$fichero = $_POST["nombrePuesto"];
$permisos = $_POST["permisos"];
date_default_timezone_set('Europe/Madrid');

        if(file_exists($fichero)){
            chmod ("fichero.txt",$permisos);
        }else{
             $mensaje = "El archivo no existe";
        }
?>