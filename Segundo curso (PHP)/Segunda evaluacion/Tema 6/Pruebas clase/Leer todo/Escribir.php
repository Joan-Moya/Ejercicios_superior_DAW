<?php
// Crea fichero e introduce la cadena.
$fichero = fopen("archivo.txt","w");
$cadena="Este es el texto que introduciremos en el fichero";
fwrite($fichero, $cadena);
fclose($fichero);
// Abre el fichero y lee el contenido
$fichero = fopen("archivo.txt","r");
while($caracter=fgetc($fichero)){
echo $caracter;
}
fclose($fichero);
?>