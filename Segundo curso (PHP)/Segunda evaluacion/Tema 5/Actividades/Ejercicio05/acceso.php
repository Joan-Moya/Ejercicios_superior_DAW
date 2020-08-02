<?php
 if(isset($_GET['errorusuario'])){
        echo "Los datos son erroneos<br>";
    }else{
        echo "Introduzca los datos de acceso<br>";
    }
?>

    <FORM ACTION="control.php" METHOD="POST">
        USUARIO: <input type="text" name="usuario"><br>
        CONTRASE&Ntilde;A: <input type="password" name="pass"><br>
            <input type="submit" value="Acceso">
    </FORM>