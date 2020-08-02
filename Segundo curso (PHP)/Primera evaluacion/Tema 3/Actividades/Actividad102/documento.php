<?php
if(isset($_POST['Enviar'])){
    $nombre=$_POST['nombre'];
    $edad=$_POST['edad'];
    $apellido=$_POST['apellidos'];
    $sueldo=$_POST['sueldo'];
 

$retencion=0;

 echo "El nombre es: ".$nombre."<br>";
 echo "Los apellidos son: ".$apellido."<br>";
 echo "Su edad es: ".$edad."<br>";

 if($edad>30 && $sueldo>25000){
    $retencion=$sueldo*0.20;
 }else{
    $retencion=$sueldo*0.10;
 }

 echo "Su sueldo es: ".$retencion;
}else{
    echo "Acceso denegado";
}
?>