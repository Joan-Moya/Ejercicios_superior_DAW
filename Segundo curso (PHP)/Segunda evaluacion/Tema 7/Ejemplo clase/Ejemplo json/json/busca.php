<?php
$codigo=$_GET['codigo'];
$datos = array( array("codigo"=>100, "nombre"=>"Luis Ros Sala",
"edad"=>30,"ciudad"=>"New York"),
array("codigo"=>200, "nombre"=>"Ana Molero Mas",
"edad"=>56,"ciudad"=>"Valencia"),
array("codigo"=>300, "nombre"=>"Roberto Bas Moreno",
"edad"=>45,"ciudad"=>"Barcelona"),
array("codigo"=>400, "nombre"=>"Sara Solis Bosch",
"edad"=>20,"ciudad"=>"Madrid"));
foreach($datos as $key=>$valor){
if ($valor["codigo"]==$codigo){
$clave=$key;
}
}
$myJSON = json_encode($datos[$clave]);
echo $myJSON;
?>