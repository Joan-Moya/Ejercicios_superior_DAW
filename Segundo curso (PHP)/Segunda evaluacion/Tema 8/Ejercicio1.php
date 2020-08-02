<form id="form1" method="GET" action="">
        Pon el nombre: <input type="text" name="nombre"><br>
        Pon la edad: <input type="text" name="edad"><br>
<input type="submit" name="boton" value="Consultar"><br>
</form>

<?php
        if (isset($_GET['boton'])){
     
                    $nombre = $_GET['nombre'];
                    $edad = $_GET['edad'];

                    //ahora vamos a comprobar si la edad es un numero entero
                    if (filter_var($edad, FILTER_VALIDATE_INT)) {
                            echo("La edad es entera");
                        } else {
                         echo("La edad no es un numero entero");
                        }

        }
?>