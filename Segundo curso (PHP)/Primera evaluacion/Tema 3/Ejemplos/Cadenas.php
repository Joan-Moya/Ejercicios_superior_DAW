<?php
//explode(delimitador, cadena)
	$texto = "Valencia,Castellon,Alicante";
	$poblacion = explode(",",$texto);
	foreach($poblacion as $valor){
		echo $valor."<br>";
	}

//implode(delimitador, array)
	$cadena = implode("-",$poblacion);
	echo $cadena."<br>";

	echo "<hr>";

	// ltrim(cadena), rtrim(cadena), trim(cadena)
	//strlen(cadena)
	$cadena = "     Aula Campus     ";
	echo strlen($cadena)."<br>";
	echo strlen(ltrim($cadena))."<br>";	//izquierda
	echo strlen(rtrim($cadena))."<br>";	//derecha
	echo strlen(trim($cadena))."<br>";

	echo "<hr>";

	//str_repeat(caracter, num_repeticiones)
	echo str_repeat("*",20)."<br>";

	//str_replace(cadena_vieja, cadena_nueva, cadena, veces)
	$cadena = "El coche mas vendido es de la marca Mercedes. La marca Mercedes es una marca Alemana.";
	echo str_replace("Mercedes", "Audi", $cadena, $cantidad)."<br>";
	echo $cantidad."<br>";

	echo "<hr>";

	//strcmp(cadena1, cadena2)
	$cadena1 = "Aula Campus";
	$cadena2 = "Aula campus";
	if((strcmp($cadena1, $cadena2)) == 0)
		echo "Cadenas Iguales<br>";
	else
		echo "Cadenas Distintas<br>";

	echo "<hr>";

	//strrev(cadena)
	echo strrev($cadena1)."<br>";

	echo "<hr>";

	//strstr(cadena, cadenabuscada);
	echo strstr("Aula Campus","Campus")."<br>"; //devuelve la cadena hasta el final

	echo "<hr>";

	//strtoupper(cadena)
	$cadena = "aula campus";
	echo strtoupper($cadena)."<br>";

	echo "<hr>";

	//strpos($cadena, $cadena_buscada[, $posicion_inicio])
	//substr ($cadena, $posicion [, $longitud])
	$cadena="Esto es una prueba";
	$pos = strpos($cadena, "es");
	echo $pos;

	echo "<hr>";

	echo substr($cadena, 5)."<br>";
	echo substr($cadena,5,6)."<br>";

	echo "<hr>";

	//substr_count(cadena, patron)
	$texto = "Los oredenadores del aula de aulacampus están encendidos";
	echo substr_count($texto, "aula");

	echo "<hr>";

	//str_pad (cadena, Long, carácter, método)
	$texto = "1.200,00€";
	echo str_pad($texto, 20, "#", STR_PAD_LEFT)."<br>";
	echo str_pad($texto, 20, "#", STR_PAD_RIGHT)."<br>";
	echo str_pad($texto, 20, "#", STR_PAD_BOTH)."<br>";

	echo "<hr>";

	//ucfirst(cadena)
	$cadena = "aula campus";
	echo ucfirst($cadena)."<br>";
	echo ucwords($cadena)."<br>";
	echo str_word_count($cadena)."<br>";
	echo "<hr>";