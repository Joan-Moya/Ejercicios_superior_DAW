<?php

function departamentos($categoria){
    $categoria1 = array ("Gerente", "Direccion");
    $categoria2 = array ("Informático", "Ingeniero", "Técnicos");
    $categoria3 = array ("Administración", "Ventas", "Almacén");
    $categoria4 = array ("Peon", "Ayudante");

    if($categoria=="Categoria 1"){
        $arrayRetorno=$categoria1;
    }else if($categoria=="Categoria 2"){
        $arrayRetorno=$categoria2;
    }else if($categoria=="Categoria 3"){
        $arrayRetorno=$categoria3;
    }else if($categoria=="Categoria 4"){
        $arrayRetorno=$categoria4;
    }
    return $arrayRetorno;
}


$dep= "Categoria 4";
$retorno=departamentos($dep);


foreach($retorno as $valor){
    echo $valor." - ";
}

?>