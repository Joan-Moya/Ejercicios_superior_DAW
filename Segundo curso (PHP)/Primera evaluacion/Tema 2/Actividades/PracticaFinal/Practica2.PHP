<?php

	//ahora vamos a declarar un array multidimensional
	$peliculas = array (array(100," Casper ", " Aventuras ",124, 2.50, true, "Todos los publicos"),
					 array(115," El libro de la selva ", "Aventuras",132,2.75,true,"Todos los publicos"),
					 array(123,"Batman forever", "Accion",98,3.25,false,"Mayores de 7 años")
					);

	$posPelicula=0;
	
?>

<style> 

	table,td{
		border: 1px solid black;
		border-collapse: collapse;
	}

</style>

<table>
	<tr>
		<td>Codigo</td><td><?php echo $peliculas[$posPelicula][0]; ?></td>
	</tr>
	<tr>
		<td>Titulo</td><td><?php echo $peliculas[$posPelicula][1]; ?></td>
	</tr>
	<tr>
		<td>Tema</td><td><?php echo $peliculas[$posPelicula][2]; ?></td>
	</tr>
	<tr>
		<td>Duracion</td><td><?php echo $peliculas[$posPelicula][3]; ?></td>
	</tr>
	<tr>
		<td>Precio</td><td><?php echo $peliculas[$posPelicula][4]; ?></td>
	</tr>
	<tr>
		<td>Estreno</td><td><?php echo ($peliculas[$posPelicula][5])?"SI":"NO"; ?></td>
	</tr>
	<tr>
		<td>Calificacion Moral</td><td><?php echo $peliculas[$posPelicula][6]; ?></td>
	</tr>
	
</table>

