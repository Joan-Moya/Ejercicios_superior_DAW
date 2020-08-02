<form id="form1" method="POST" action="">
        Pon el nombre de la empresa: <input type="text" name="nombre"><br>
        Pon el correo: <input type="text" name="correo"><br>
<input type="submit" name="boton" value="Consultar"><br>
</form>

<?php
        if (isset($_POST['boton'])){
     
                    $nombre = $_POST['nombre'];
                    $email = $_POST['correo'];

                    //ahora vamos a comprobar si el correo es correcto
                    if (filter_input(INPUT_POST, $email, FILTER_VALIDATE_EMAIL)) {
                        echo("El email es valido");
                       } else {
                        echo("El email no es valido");
                       }

        }
?>