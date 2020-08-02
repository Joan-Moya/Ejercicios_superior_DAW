<?php

	//declarams varibles y arrays
	$nombre = "Luis";
	$sueldo = 1200.75;
	$edad = 34;
	$asignaturas = array("DWEC","DWES","ING","EIE","DIW","DAW");

	// aqui tenemos las maneras de imprimir datos por pantalla
	echo "El sueldo es ".$sueldo."<br>";
	echo "El sueldo es $sueldo<br>";
	echo 'El sueldo es $sueldo<br>';//las comillas dobles interpretan las variables 
	echo "La variable \$sueldo vale $sueldo<br>";

	//ahora vamos a mostrar valores del array
	echo $asignaturas[3]."<br>";

	//ahora vamos a declarar un array multidimensional
	$libros = array (array(1,"Excel 2016", 43.57),
					 array("2","Seguridad inform.", 30),
					 array(3,"PHP a fondo", 40.92)
					);
	echo "El precio del libro ".$libros[1][1]." tiene un precio de ".$libros[1][2]." euros";

?>