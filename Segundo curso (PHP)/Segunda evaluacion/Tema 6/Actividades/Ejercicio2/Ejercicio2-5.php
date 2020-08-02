
<form action="" method="post">
            Pon El nombre del directorio: <input type="text" name="nombrePuesto"><br>
            <input type="submit" value="Comprobar">
    </form>

<?php

$fichero = $_POST["nombrePuesto"];

date_default_timezone_set('Europe/Madrid');

if (is_dir ($fichero)) {

    
    echo "Carpeta Actual: ".getcwd()."<br>";
    chdir($fichero."<br>");


    // Abre el directorio actual para leer contenido 
    $directorio = opendir (".");

    while($fichero=readdir($directorio)){ 
        echo $fichero."<br>";
    }



} else {
    echo "No es un directorio<br>";
}

?>