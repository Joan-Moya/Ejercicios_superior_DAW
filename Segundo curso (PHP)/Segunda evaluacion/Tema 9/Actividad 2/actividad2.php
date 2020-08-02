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
            echo getCountryFromIP($ip);

            if($ip=="ES"){
                    echo "Bienvenidos a la página web";
            }else if($ip=="US"){
                    echo "Welcome to website";
            }else if($ip=="FR"){
                echo "Bienvenue sur le site";
            }else if($ip=="NL"){
                echo "Welkom op de website";
            }


        }
?>