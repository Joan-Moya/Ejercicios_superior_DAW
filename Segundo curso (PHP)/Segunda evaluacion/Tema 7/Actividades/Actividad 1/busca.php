<?php
$codigo=$_GET['codigo'];
$datos = array( 
    
            array("codigo"=>100, "Titulo"=>"Casper",
        "Tema"=>"Aventuras","Duracion"=>"124","Precio"=>"2.50","Cmoral"=>"Todos los publicos"),


            array("codigo"=>115, "Titulo"=>"El libro de la selva",
        "Tema"=>"Aventuras","Duracion"=>"132","Precio"=>"2.75","Cmoral"=>"Todos los publicos"),


            array("codigo"=>123, "Titulo"=>"Batman forever",
        "Tema"=>"Accion","Duracion"=>"98","Precio"=>"3.25","Cmoral"=>"Mayores de 7 años"),

    );

foreach($datos as $key=>$valor){
if ($valor["codigo"]==$codigo){
$clave=$key;
}
}
$myJSON = json_encode($datos[$clave]);
echo $myJSON;
?>