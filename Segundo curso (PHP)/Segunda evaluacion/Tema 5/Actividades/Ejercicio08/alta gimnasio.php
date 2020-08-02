
<form action="" method="post" enctype="multipart/form-data">
Nombre: <input type="text"><br>
Apellido: <input type="text"><br>
DNI: <input type="text"><br><br>
        <input type="file" name="archivo" /><br>
        <input type="submit" name="boton" value="Subir" />
</form>

<?php

        if(isset($_POST['boton'])){

            if (( ($_FILES["archivo"]["type"] == "application/png") || ($_FILES["archivo"]["type"] == "application/jpg")) &&($_FILES["archivo"]["size"] < 10000)){

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