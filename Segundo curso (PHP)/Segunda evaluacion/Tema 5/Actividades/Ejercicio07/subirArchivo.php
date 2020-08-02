
<form action="" method="post" enctype="multipart/form-data">
Tipo de casa: <input type="text"><br>
Calle: <input type="text"><br>
Numero: <input type="text"><br><br>
        <input type="file" name="archivo" /><br>
        <input type="submit" name="boton" value="Subir" />
</form>

<?php

        if(isset($_POST['boton'])){

            if (($_FILES["archivo"]["type"] == "image/jpeg") &&($_FILES["archivo"]["size"] < 1000000)){

                if ($_FILES["archivo"]["error"] > 0){

                    echo $_FILES["archivo"]["error"] . "";

                }else{

                    if (file_exists("datos/".$_FILES["archivo"]["name"])) {
                        echo $_FILES["archivo"]["name"] . " ya existe. ";
                    }else{
                    move_uploaded_file($_FILES["archivo"]["tmp_name"],"datos/" . $_FILES["archivo"]["name"]);
                    echo "Archivo Subido ";
                    }
                }
            }else{
                    echo "Archivo no permitido";
                }
        }
?>