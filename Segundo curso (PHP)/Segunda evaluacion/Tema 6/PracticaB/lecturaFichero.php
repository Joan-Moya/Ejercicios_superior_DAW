<style>
table{
    border:1px black solid;
    border-collapse:collapse;
}
td{
    border:1px black solid;
    border-collapse:collapse;
}
tr{
    border:1px black solid;
    border-collapse:collapse;
}
</style>

<form  action="" method="post" enctype="multipart/form-data">

    Id_Usuario <input type="text" name="id"><br>
    <input type="submit" value="Insertar" name="boton"><br><br>

</form>

<?php
        if (isset($_POST['boton'])){

            $id = $_POST['id']; 
            $datosFichero="";

            // Abre el fichero y lee el contenido
            $fichero= fopen("registro/usuario_".$id.".txt","r");
            while($caracter=fgetc($fichero)){
            $datos.=$caracter;
            }
            fclose($fichero);
            $datosFichero=explode(";",$datos);

            echo "
            <table>
                <tr>
                    <td>Id_Usuario</td>
                    <td>".$datosFichero[0]."</td>
                </tr>

                <tr>
                    <td>Nombre</td>
                    <td>".$datosFichero[1]."</td>
                </tr>

                <tr>
                    <td>Apellidos</td>
                    <td>".$datosFichero[2]."</td>
                </tr>

                <tr>
                    <td>Fecha Nacimiento</td>
                    <td>".$datosFichero[3]."</td>
                </tr>

                <tr>
                    <td>Telefono</td>
                    <td>".$datosFichero[4]."</td>
                </tr>

                <tr>
                    <td>Sexo</td>
                    <td>".$datosFichero[5]."</td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>".$datosFichero[6]."</td>
                </tr>

                <tr>
                    <td>Poblacion</td>
                    <td>".$datosFichero[7]."</td>
                </tr>

                <tr>
                    <td>Pais</td>
                    <td>".$datosFichero[8]."</td>
                </tr>

                <tr>
                    <td>Usuario</td>
                    <td>".$datosFichero[9]."</td>
                </tr>

                <tr>
                    <td>Contraseña</td>
                    <td>".$datosFichero[10]."</td>
                </tr>
            </table>";

            echo "<img src='registro/fotos/img_".$id.".jpg'>";


            
        }
?>