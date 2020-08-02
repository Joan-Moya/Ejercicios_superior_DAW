<?php

$hoteles = array (
    array("Nombre"=>"Abashiri (NH)","Cat"=>4,"Hab"=>168,"Poblacion"=>"46013 Valencia","Direccion"=>"Avenida Ausias March, 59"),
    array("Nombre"=>"Abba Acteon (Abba Hoteles)","Cat"=>4,"Hab"=>42,"Poblacion"=>"46013 Valencia","Direccion"=>"Escultor Vicente Beltran Grimal,2"),
    array("Nombre"=>"Acta Atarazanas","Cat"=>4,"Hab"=>25,"Poblacion"=>"46011 Valencia","Direccion"=>"Plaza Tribunal de las Aguas, 4"),
    array("Nombre"=>"Acta del Carmen","Cat"=>4,"Hab"=>183,"Poblacion"=>"46003 Valencia","Direccion"=>"Avenida de Francia, 67"),
    array("Nombre"=>"AC Valencia (Ac Hotels)","Cat"=>3,"Hab"=>183,"Poblacion"=>"46023 Valencia","Direccion"=>"Avenida Francia, 67"),
    array("Nombre"=>"Ad Hoc Monumental Valencia","Cat"=>3,"Hab"=>28,"Poblacion"=>"46023 Valencia","Direccion"=>"Boix,4"),
    array("Nombre"=>"Alkazar","Cat"=>1,"Hab"=>18,"Poblacion"=>"46023 Valencia","Direccion"=>"Mosén Femades,11"),
);

unset($hoteles[3]);

foreach($hoteles as $valor){  
        foreach($valor as $dato){
            echo $dato." - ";
        }
    
    echo "<hr>";
}


?>