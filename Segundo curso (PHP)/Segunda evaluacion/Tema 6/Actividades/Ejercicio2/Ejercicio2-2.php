
<form action="" method="post">
            Pon El nombre del fichero: <input type="text" name="nombrePuesto"><br>
            Pon El nombre del fichero que quieras copiar: <input type="text" name="nombrePuesto2"><br>
            <input type="submit" value="Comprobar">
    </form>
<?php

$fichero = $_POST["nombrePuesto"];
$fichero_destino = ["nombrePuesto2"]; // copia fichero
date_default_timezone_set('Europe/Madrid');

    if (file_exists($fichero)) {
        if (is_file ($fichero)) {
            
            
            
            copy ($fichero, $fichero_destino);


        } else {
            echo "No es un fichero<br>";
        }

    

    }else {
        echo "El fichero no existe";
    }
?>