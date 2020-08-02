<?php
//incluir la logica del modelo
include_once('modelo.php');
//obtenr los datos de un articulo
$cod_articulo=2;
$articulo = getArticulo($articulos,$cod_articulo);
//incluir la logica de la vista
include_once('vista.php');
?>