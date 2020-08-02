<style>
	table, tr, td{
		border:1px solid black;
		border-collapse:collapse;
		padding:5px;
	}
</style>
<?php
	include('array.php');
	//guardamos id del producto solicitado
	$id=$_GET['id'];
	
	//encontramos el producto con id seleccionado
	foreach($productos as $indice => $valor){
		echo "<table>";
		if($valor[0] == $id){
			echo "<tr><td>Código</td><td>".$valor[0]."</td></tr>";
			echo "<tr><td>Artículo</td><td>".$valor[1]."</td></tr>";
			echo "<tr><td>Precio</td><td>".$valor[2]."€</td></tr>";
			break;
		}
	}
	echo "</table>";
?>
	<!---usuario introduce cantidad de los unidades y al pulsar el boton vamos a pagina de compras--->
	<form action="compra.php" method="POST">		
		Unidades  <input type="text" name="unidades" style="width:74px"><br>
		<input type="hidden" name="codigo" value="<?php echo $valor[0]; ?>">
		<input type="submit" value="Realizar Compra" name="compra">
	</form>

		