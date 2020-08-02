<form  action="" method="post" enctype="multipart/form-data">

    Id_Usuario <input type="text" name="id"><br>
    Nombre <input type="text" name="nombre"><br>
    Apellidos <input type="text" name="apellidos"><br>
    Fecha nacimiento <input type="text" name="fecha"><br>
    Telefono <input type="text" name="telefono"><br>
    Sexo <input type="text" name="sexo"><br>
    Email <input type="text" name="email"><br>
    Poblacion <input type="text" name="poblacion"><br>
    Pais <input type="text" name="pais"><br>
    Usuario <input type="text" name="usuario"><br>
    Contrasena <input type="text" name="contrasena"><br>
    Foto <input type="file" name="archivo" />

    <input type="submit" value="Insertar" name="boton">

</form>

<a href="menu.php">Volver a menu</a>

<?php
        if (isset($_POST['boton'])){

            $id = $_POST['id']; 
            $nombre = $_POST['nombre']; 
            $apellidos = $_POST['apellidos']; 
            $fecha = $_POST['fecha']; 
            $telefono = $_POST['telefono']; 
            $sexo = $_POST['sexo'];
            $email = $_POST['email'];
            $poblacion = $_POST['poblacion'];
            $pais = $_POST['pais'];
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];

            $nombreImagen="img_".$id.".jpg";

            $cadena=$id.";".$nombre.";".$apellidos.";".$fecha.";".$telefono.";".$sexo.";".$email.";".$poblacion.";".$pais.";".$usuario.";".$contrasena;

            $fichero = fopen("registro/usuario_".$id.".txt","w");
            fwrite($fichero, $cadena);
            fclose($fichero);

                if (($_FILES["archivo"]["type"] == "image/jpeg") &&
                    ($_FILES["archivo"]["size"] < 2000000)) {
                        if ($_FILES["archivo"]["error"] > 0) {
                            echo $_FILES["archivo"]["error"] . "";
                        } else {

                        move_uploaded_file($_FILES["archivo"]["tmp_name"],
                        "registro/fotos/".$nombreImagen);
                        echo "Archivo Subido ";
                 
                }
                } else {
                echo "Archivo no permitido";
                }
                

            // Vuelca el contenido completo del fichero 
            // en la variable $contenido
            $contenido = file_get_contents('usuario_cod.txt');

        }
?>