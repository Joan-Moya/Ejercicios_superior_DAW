<form action="" method="post">
            Pon El nombre del fichero: <input type="text" name="nombrePuesto"><br>
            <input type="submit" value="Comprobar">
    </form>
<?php

$fichero = $_POST["nombrePuesto"];
date_default_timezone_set('Europe/Madrid');

        if(file_exists($fichero)){
            $archivo = 'a.txt';  
            $identificador = fopen($afichero, 'r');  
                while(!feof($identificador)){  
                    $cadena.= fgetc($identificador);  
                    $cadena = substr($cadena, -1);  
                    echo $cadena . '<br />';  
}  
        }else{
             $mensaje = "El archivo no existe";
        }
?>