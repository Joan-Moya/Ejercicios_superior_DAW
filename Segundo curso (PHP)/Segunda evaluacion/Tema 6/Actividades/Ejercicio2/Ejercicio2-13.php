
<form action="" method="post">
            Pon El nombre del archivo: <input type="text" name="nombrePuesto"><br>
            <input type="submit" value="Comprobar">
    </form>

<?php

$fichero = $_POST["nombrePuesto"];

date_default_timezone_set('Europe/Madrid');

if (is_file ($fichero)) {


        echo "El archivo es ejecutable?= ".is_executable($fichero)."<br>";
        echo "El archivo tiene permisos de lectura?= ".is_readable ($fichero)."<br>";
        echo "El archivo tiene permisos de escritura?= ".is_writeable ($fichero)."<br>";


} else {
    echo "No es un directorio<br>";
}

?>