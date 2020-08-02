<?php

	//ahora vamos a declarar un array multidimensional
	$libros = array (array(100," Casper ", " Aventuras ",124, 2.50, true, "Todos los publicos"),
					 array(115," El libro de la selva ", "Aventuras",132,2.75,true,"Todos los publicos"),
					 array(123,"Batman forever", "Accion",98,3.25,false,"Mayores de 7 años")
					);

	$posLibro=2;
	echo "Los datos de la posicion $posLibro son: ".$libros[$posLibro][0]."-".$libros[$posLibro][1]."-".$libros[$posLibro][2]."-".$libros[$posLibro][3]."-".$libros[$posLibro][4]."-".$libros[$posLibro][5]."-".$libros[$posLibro][6];

?>