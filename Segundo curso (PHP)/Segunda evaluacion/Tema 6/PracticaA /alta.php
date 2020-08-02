<form action="" name="formulario" method="post">

    Matricula <input type="text" name="matricula"><br>
    Marca <input type="text" name="marca"><br>
    Modelo <input type="text" name="modelo"><br>
    Tipo <input type="text" name="tipo"><br>
    Motor <input type="text" name="motor"><br>
    Color <input type="text" name="color"><br>
    Cilindrada <input type="text" name="cilindrada"><br>
    Precio <input type="text" name="precio"><br>
    Extras<input type="text" name="extras"><br>

    <input type="submit" value="Insertar" name="boton">

</form>

<a href="menu.php">Volver a menu</a>

<?php
        if (isset($_POST['boton'])){
        include("conexion.php");
        $Matricula = $_POST['matricula'];
        $Marca = $_POST['marca'];
        $Modelo = $_POST['modelo'];
        $Tipo = $_POST['tipo'];
        $Motor = $_POST['motor'];
        $Color = $_POST['color'];
        $Cilindrada = $_POST['cilindrada'];
        $Precio = $_POST['precio'];
        $Extras = $_POST['extras'];

        $sentencia = "insert into coches values('$Matricula','$Marca',
        '$Modelo','$Tipo','$Motor','$Color',$Cilindrada,$Precio,'$Extras')";

        

        $consulta = mysqli_query($conexion, $sentencia)
        or die("Error de Consulta");
        if (mysqli_affected_rows($conexion)!=0) {
        echo "El registro ha sido insertado con exito<br>";
        }
        include("desconexion.php");
        }
?>