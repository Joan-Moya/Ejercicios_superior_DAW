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
    function array_to_xml($array, &$xml_info, $codigo) {
        $encontrado=false;

        foreach($array as $key => $value) {
            if($value['codigo']==$codigo){
                $array = $value;
                $encontrado=true;
                break;
            }
        }

        if ($encontrado){
            foreach($array as $key => $value){
            $xml_info->addChild("$key",htmlspecialchars("$value"));
            }
        }
    }

//Creamos un objeto del tipo SimpleXMLElement
    $xml_info = new SimpleXMLElement("<?xml version=\"1.0\"?><empleado></empleado>");
// Llamamos a la función que convierte array en XML
    array_to_xml($datos,$xml_info, $codigo);
// Convertimos a string XML válido
    $result = $xml_info->asXML();
    echo $result;
?>