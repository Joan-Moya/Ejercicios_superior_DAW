
<form action="" method="post">
            Pon El nombre del directorio: <input type="text" name="nombrePuesto"><br>
            <input type="submit" value="Comprobar">
    </form>

<?php

$fichero = $_POST["nombrePuesto"];

date_default_timezone_set('Europe/Madrid');

if (is_dir ($fichero)) {



    while($fichero=readdir($directorio)){ 
        echo $fichero."<br>";
    }



} else {
    echo "No es un directorio<br>";
}

?>