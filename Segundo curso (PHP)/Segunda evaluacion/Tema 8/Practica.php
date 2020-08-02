<form id="form1" method="POST" action="">
        Pon la ip de la empresa: <input type="text" name="ip"><br>
        Pon la cantidad de equipos que hay: <input type="text" name="cantidad"><br>
        Pon la ip privada: <input type="checkbox" name="ipprivada"><br>
        Pon el correo del administrador: <input type="text" name="correo"><br>
<input type="submit" name="boton" value="Consultar"><br>
</form>

<?php
        if (isset($_POST['boton'])){

         
                    //ahora vamos a comprobar si la ip es valida
                    if (filter_input(INPUT_POST, "ip", FILTER_VALIDATE_IP)) {
                        echo("La ip es valida / ");
                       } else {
                        echo("La ip no es valida / ");
                       }

                       //ahora vamos a comprobar si la cantidad es un numero entero
                    if (filter_input(INPUT_POST,"cantidad", FILTER_VALIDATE_INT)) {
                        echo("La cantidad es entera / ");
                    } else {
                     echo("La cantidad no es entera / ");
                    }

                     //ahora vamos a comprobar si el correo es correcto
                     if (filter_input(INPUT_POST, "correo", FILTER_VALIDATE_EMAIL)) {
                        echo("El email es valido / ");
                       } else {
                        echo("El email no es valido / ");
                       }

                        //ahora vamos a comprobar si el correo es correcto
                     if (filter_input(INPUT_POST, "ipprivada", FILTER_VALIDATE_BOOLEAN)) {
                        echo("La ip es privada/ ");
                       } else {
                        echo("La ip es publica/ ");
                       }
        }
?>