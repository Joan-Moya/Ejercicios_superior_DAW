
<form action="" method="post">
            Pon El nombre del directorio: <input type="text" name="nombrePuesto"><br>
            <input type="submit" value="Comprobar">
    </form>

<?php

$fichero = $_POST["nombrePuesto"];

date_default_timezone_set('Europe/Madrid');

        if (is_dir ($fichero)) {

            $fichero = opendir("."); //ruta actual
            while ($archivo = readdir($fichero)) //obtenemos un archivo y luego otro sucesivamente
            {
                if (is_dir($archivo))//verificamos si es o no un directorio
                {
                    echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
                }
                else
                {
                    echo $archivo . "<br />";
                }
            }


        } else {
             echo "No es un directorio<br>";
        }

?>