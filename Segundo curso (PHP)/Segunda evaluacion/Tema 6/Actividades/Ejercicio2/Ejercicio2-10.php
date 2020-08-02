
<form action="" method="post">
            Pon El nombre del archivo: <input type="text" name="nombrePuesto"><br>
            <input type="submit" value="Comprobar">
    </form>

<?php

$fichero = $_POST["nombrePuesto"];

date_default_timezone_set('Europe/Madrid');

if (is_file ($fichero)) {


        echo "El archivo es de tipo= ".filetype($fichero);


} else {
    echo "No es un directorio<br>";
}

?>