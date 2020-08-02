
    <form action="" method="post">
            Pon una url: <input type="text" name="url"><br>
            <input type="checkbox" name="recordar" >Recordar<br>
            <input type="submit" name="enviar">
    </form>

<?php
    if($_POST['enviar']){

        setcookie("url",$_POST["url"],time()+60);

        if(!isset($_POST["recordar"])){//cuando no la he marcado
             setcookie("url","",time()-60);//borro la cookie (por eso el tiempo esta en negativo)
        }

        header("location:correo.php");
        
    } 
 
?>