<?php
// Vuelca el contenido completo del fichero
// en la variable $contenido

$contenido = file_get_contents('datos.txt');
// Cambia los retornos de carro \r\n por <br>
// y muestra el contenido de la variable $contenido
echo nl2br($contenido);
?>