<form id="form1" method="POST" action="">
        Pon la url de la web: <input type="text" name="url"><br>

<input type="submit" name="boton" value="Consultar"><br>
</form>

<?php

//incluimos la libreria
include("geoiploc.php");
        if (isset($_POST['boton'])){
     
           
                    $url = $_POST['url'];

                    $ip = gethostbyname($url);
                    

                   
            //Devuelve el nombre del país correspondiente a la IP
            echo getCountryFromIP($ip, "Name");

            

        }
?>