<style>
	table, tr, td{
		border:1px solid black;
		border-collapse:collapse;
		padding:5px;
	}
</style>
<?php
	// Creamos sesion
	session_start();
	if(!isset($_SESSION['compra'])){
		$productosComprados = array(); //Utilizaremos un array de productos comprados.
		//creamos variable de sesion
		$_SESSION['compra']=$productosComprados;
	}
	include('array.php');
	//recorremos el array de los productos
		echo "<h1>Listado de Artículos</h1>";
		echo "<table>";
		foreach($productos as $indice => $valor){
			echo "<tr>";
			foreach($valor as $pos => $datos){
				echo "<td>".$datos."</td>";
			}
			echo "<td><a href='datos.php?id=".$valor[0]."'>Comprar</a></td></tr>";
		}
		echo "</table>";
?>
	<a href="carro.php">Ver Carro</a>