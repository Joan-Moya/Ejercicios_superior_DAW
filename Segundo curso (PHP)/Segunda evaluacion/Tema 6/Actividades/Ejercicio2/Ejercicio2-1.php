
<form action="" method="post">
            Pon El nombre del fichero o directorio: <input type="text" name="nombrePuesto"><br>
            <input type="submit" value="Comprobar">
    </form>
<?php

$fichero = $_POST["nombrePuesto"];

date_default_timezone_set('Europe/Madrid');

    if (file_exists($fichero)) {
        if (is_file ($fichero)) {
            echo "Es un fichero<br>";
        } else {
            echo "No es un fichero<br>";
        }
        if (is_dir ($fichero)) {
            echo "Es un directorio<br>";
        } else {
            echo "No es un directorio<br>";
        }
    

    echo "Fecha: ".date("d/m/Y H:i:s", filemtime($fichero)). "<br>";
    echo "Tamaño: ".filesize($fichero)."<br>";
    }else {
        echo "El fichero no existe";
    }
?>