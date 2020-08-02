<style>
      .tabla{
border: 1px solid black; border-collapse: collapse;
} 
.cabecera{
             border: 1px solid black;
             background-color: red;
             width: 100px;
             font-weight: bold;
             color: white;
             text-align: center;
} 
.campo{
border: 1px solid black;
} 
</style>

<?php

// Datos conexión a la base de datos
$host = "localhost";
$user = "root";
$pass = "root";
$basedatos = "Videoclub (DWES)";
$conexion = mysqli_connect($host, $user, $pass, $basedatos);
// UTF-8 conjunto de caracteres por defecto para conexión MySQL 
mysqli_query ($conexion, "SET NAMES 'utf8'");
// Sentencia SQL y almacenar en $resultado su ejecución 
$sentencia = "SELECT * FROM peliculas";
$resultado = mysqli_query($conexion, $sentencia);
// Muesta el número de registros del resultado de la consulta SQL 
echo "Registros: ".mysqli_num_rows($resultado);
// Almacenamos el resultado de la consulta en un array 
while($fila = mysqli_fetch_assoc($resultado)){
$registros[] = $fila; 
}
mysqli_free_result($resultado);
// Muestra resultado en forma de tabla
echo "<table class='tabla'>";
echo "<tr>";
// Muestra cabecera de tabla
$cabecera = array("Codigo","Titulo","Tema","Duracion","Precio"); 
foreach($cabecera as $dato){
echo "<td class='cabecera'>".$dato."</td>"; 
}
echo "</tr>";

// Obtiene un registro del array de resultados de la consulta 
foreach($registros as $registro){
echo "<tr>";
// Muestra cada uno de los valores de los campos del resgistro 
foreach($registro as $valor){
echo "<td class='campo'>".$valor."</td>"; 
}
echo "</tr>";
}
echo "</table>"; 
mysqli_close($conexion);
?>