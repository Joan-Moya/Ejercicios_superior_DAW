
<h1>Pon el coche que quieras eliminar</h1>

<form action="" name="formulario" method="post">

    Matricula <input type="text" name="matricula"><br>

    <input type="submit" value="Insertar" name="boton">

</form>

<a href="menu.php">Volver a menu</a>

<?php
        if (isset($_POST['boton'])){
        include("conexion.php");
        $Matricula = $_POST['matricula'];

        $sentencia = "delete from coches where matricula='$Matricula'";

        $consulta = mysqli_query($conexion, $sentencia)
        or die("Error de Consulta");
        if (mysqli_affected_rows($conexion)!=0) {
        echo "El registro ha sido eliminado con exito<br>";
        }
        include("desconexion.php");
        }
?>