<style>
	table, tr, td{
		border:1px solid black;
		border-collapse:collapse;
		padding:5px;
	}
</style>
<?php
	session_start();
	
	include('array.php');
	$precio_final = 0;

	if(isset($_SESSION['compra'])){
		echo "<h1>Carro de la Compra</h1>";
		echo "<table>";
		echo "<tr><td>Articulo</td><td>Unidades</td><td>Precio</td></tr>";
		foreach($_SESSION['compra'] as $indice => $valor){
			echo "<tr>";
			echo "<td>".$valor[0]."</td><td>".$valor[1]."</td><td>".$valor[2]."</td>";
			$precio_final += $valor[2];
		}
			echo "</tr>";
			
		}echo "</table>";
	echo "<br>Importe Final: ".$precio_final."<br>";
?>
	<a href="listado.php">Ver Listado</a>