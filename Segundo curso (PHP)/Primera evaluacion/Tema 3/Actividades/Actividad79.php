<?php


$puestosEmpleados = array("Administrativo","Informatico","Comercial","Mozo Almacen","Comercial","Informatico","Administrativo","Administrativo","Gerente","Director","Administrativo","comercial","Mozo Almacen","Comercial","informatico","Administrativo","Administrativo");



$Resultado = array_count_values($puestosEmpleados);


foreach($Resultado as $indice => $valor){
    echo $indice." =".$valor."<br>";
}

?>