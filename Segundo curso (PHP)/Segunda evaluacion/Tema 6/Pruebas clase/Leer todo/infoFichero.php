<?php
// fichero que comprobamos
$fichero = "archivo.txt";
// Zona horaria Madrid
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
    if (is_executable ($fichero)) {
    echo "Tiene permiso ejecutable<br>";
    } else {
    echo "No tiene permiso ejecutable<br>";
    }
    if (is_readable ($fichero)) {
    echo "Tiene permiso lectura<br>";
    } else {
    echo "No tiene permiso lectura<br>";
    }
    if (is_writeable ($fichero)) {
    echo "Tiene permiso escritura<br>";
    } else {
    echo "No tiene permiso escritura<br>";
    }
    echo "Fecha: ".date("d/m/Y H:i:s", filemtime($fichero)).
    "<br>";
    echo "Tamaño: ".filesize($fichero)."<br>";
    }
    else {
    echo "El fichero no existe";
    }
    ?>