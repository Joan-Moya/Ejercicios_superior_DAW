<form id="form1" method="post" action="">
        Pon la matricula: <input type="text" name="matricula"><br>
<input type="submit" name="boton" value="Consultar"><br>
</form>

<?php
        if ((isset($_POST['boton'])) && ($_POST['boton'] == 'Consultar')){
        if (isset($_POST["matricula"])){

                include("conexion.php");
                $Matricula = $_POST['matricula'];

                $sentencia = "select * from coches where matricula='$Matricula'";
                $consulta = mysqli_query($conexion, $sentencia)
                or die("Error de Consulta");

                if ($fila = mysqli_fetch_array($consulta)){

                    $Matricula = $fila['matricula'];
                    $Marca = $fila['marca'];
                    $Modelo = $fila['modelo'];
                    $Tipo = $fila['tipo'];
                    $Motor = $fila['motor'];
                    $Color = $fila['color'];
                    $Cilindrada = $fila['cilindrada'];
                    $Precio = $fila['precio'];
                    $Extras = $fila['extras'];

                echo "<form id='form2' action='' method='post'>";
                echo "Matricula:
                <input type='text' value='$Matricula' name='matricula'
                readonly><br>";
                echo "Marca:
                <input type='text' value='$Marca' name='marca'><br>";
                echo "Modelo:
                <input type='text' value='$Modelo' name='modelo'><br>";
                echo "Tipo:
                <input type='text' value='$Tipo' name='tipo'><br>";
                echo "Motor:
                <input type='text' value='$Motor' name='motor'><br>";
                echo "Color:
                <input type='text' value='$Color' name='color'><br>";
                echo "Cilindrada:
                <input type='text' value='$Cilindrada' name='cilindrada'><br>";
                echo "Precio:
                <input type='text' value='$Precio' name='precio'><br>";
                echo "Precio:
                <input type='text' value='$Precio' name='precio'><br>";
                echo "Extras:
                <input type='text' value='$Extras' name='extras'><br>";

                echo "<input type='submit' name='boton' value='Actualizar'><br>";
                echo "</form>";
                }
                    mysqli_free_result($consulta);
                    include("desconexion.php");
            }
            else
            {
                echo "Registro no encontrado.<br>";
            }
        }
        if ((isset($_POST['boton'])) && ($_POST['boton'] == 'Actualizar')){
                
                    $Matricula = $_POST['matricula'];
                    $Marca = $_POST['marca'];
                    $Modelo = $_POST['modelo'];
                    $Tipo = $_POST['tipo'];
                    $Motor = $_POST['motor'];
                    $Color = $_POST['color'];
                    $Cilindrada = $_POST['cilindrada'];
                    $Precio = $_POST['precio'];
                    $Extras = $_POST['extras'];

                include("conexion.php");

                $sentencia = "UPDATE coches SET marca='$Marca',modelo='$Modelo',
                tipo='$Tipo', motor='$Motor', color='$Color', cilindrada=$Cilindrada, precio=$Precio, 
                extras='$Extras' where matricula='$Matricula'";

                $consulta = mysqli_query($conexion, $sentencia)
                or die("Error de Consulta");

                echo "Registro ha sido actualizado con exito<br>";
                include("desconexion.php");
        }
?>