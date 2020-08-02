<?php
// Recoge los datos enviados por la petición en formato XML
$xml = file_get_contents('php://input');
// Abre el fichero autores.xml
$fichero = fopen('datosPeliculas.xml', 'w');
// Escribe la cadena en el fichero
fwrite($fichero, $xml);
// Cierra el fichero
fclose($fichero);
echo "Datos almacenados";
?>