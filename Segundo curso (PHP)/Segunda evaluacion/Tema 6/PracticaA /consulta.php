<style>
    table{
        border:1px black solid;
        border-collapse:collapse;
    }
    tr{
        border:1px black solid;
        border-collapse:collapse;
    }
    td{
        border:1px black solid;
        border-collapse:collapse;
    }
</style>







<h1>Pon el coche que quieras consultar</h1>

<form action="" name="formulario" method="post">
    Matricula <input type="text" name="matricula"><br>
    <input type="submit" value="Insertar" name="boton">
</form>

<a href="menu.php">Volver a menu</a>

<?php
        if (isset($_POST['boton'])){
        include("conexion.php");
        $Matricula = $_POST['matricula'];

        $sentencia = "Select * from coches where matricula='$Matricula'";

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
         $cabecera = array("Matricula","Marca","Modelo","Tipo","Motor","Color","Cilindrad","Precio","Extras");
         foreach($cabecera as $dato){
            echo "<td class='cabecera'>".$dato."</td>";
         }
         echo "</tr>";


        $consulta = mysqli_query($conexion, $sentencia)
        or die("Error de Consulta");
        if (mysqli_affected_rows($conexion)!=0) {
        echo "El registro ha sido insertado con exito<br>";
        }
        include("desconexion.php");
        }
?>