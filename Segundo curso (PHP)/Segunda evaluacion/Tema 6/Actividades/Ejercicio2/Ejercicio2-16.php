<form action="" method="post">
            Pon El nombre del fichero: <input type="text" name="nombrePuesto"><br>
            Pon El desplazamiento de lectura <input type="text" name="desplazamiento"><br>
            Pon Cuantos caracteres ha de leer <input type="text" name="numcaracteres"><br>
            <input type="submit" value="Comprobar">
    </form>
<?php

$fichero = $_POST["nombrePuesto"];
$desplazamiento = $_POST["depslazamiento"];
$numeroCaracteres = $_POST["numcaracteres"];
date_default_timezone_set('Europe/Madrid');

        if(file_exists($fichero)){
            rewinddir($desplazamiento);//nos situamos dentro del fichero
            readdir($numeroCaracteres);//le decimos cuantos caracteres queremos que lea dentro del fichero
        }else{
             $mensaje = "El archivo no existe";
        }
?>