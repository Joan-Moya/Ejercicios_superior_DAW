<?php
$correo = $_POST['correo'];

    if(compruebaCorreo($correo)){
        echo "El usuario existe";
    } else {
        echo "El usuario no existe";
    }

    function compruebaCorreo($correo){

        $arrayCorreos = ["Angel","Carla","Joan","Luis"];
        $encontrado = false;

        foreach($arrayCorreos as $valor){
            if($valor==$correo){
                $encontrado=true;
                break;
            }
        }
        return $encontrado;
        }
?>