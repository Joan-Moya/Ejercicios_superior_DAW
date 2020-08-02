<?php
//incluye el fichero php (añade el fichero)
include("objeto.php");

 $chalet1 = new Chalet("345","adosado","burjassot","valencia",200,5,2,100000,"3 fotos",45,true,false);
 $vivienda = new Vivienda("320h","campo","sueca","valencia",200,5,2,110000,"6 fotos",20,true,false);

 echo "-----Mostramos los datos del chalet-----<br>";
 $chalet1->mostrarChalet();
 echo "<hr>";
 echo "-----Mostramos los datos de la vivienda-----<br>";
 $vivienda->mostrarVivienda();
?>