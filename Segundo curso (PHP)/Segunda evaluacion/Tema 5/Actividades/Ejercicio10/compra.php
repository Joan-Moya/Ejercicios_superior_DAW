<?php
	session_start();
	include('array.php');
	
	//creamos un array vacío donde guardamos producto elegido
	$array_producto = array();
	
	//guardamos en una variable cantidad de unidades y codigo
	$unidades = $_POST['unidades'];
	$codigo = $_POST['codigo'];
	//ponemos en un array del producto
	$array_producto[0]=$codigo;
	$array_producto[1]=$unidades;
	//verificamos codigo del producto y sacamos el precio, multiplicamos por unidades y guardamos en variable 'precio'
	foreach($productos as $indice => $valor){
		if($valor[0] == $codigo){
			$precio = $valor[2] * $unidades;
		}
	}
	$array_producto[2] = $precio;
	//añadimos al array productos seleccionados
	array_push($_SESSION['compra'], $array_producto);
	header("Location:carro.php");

?>
