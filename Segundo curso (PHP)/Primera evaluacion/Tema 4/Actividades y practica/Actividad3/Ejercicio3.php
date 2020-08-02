<?php
//incluye el fichero php (añade el fichero)
include("objeto.php");

 $portAula1 = new Portatil();

 $portAula1->setCodigo("HP4300");
 $portAula1->setDescripcion("I3 4Gb RAM 500GB DiscoDuro");
 $potAula1->setUnidades(4);
 $portAula1->setPrecio(1050.60);
 $portAula1->setDefectuoso(false);

 $portAula2 = new Portatil("ASUS Z4500","I5 4Gb RAM 500GB DiscoDuro",100,880.56,false);

 $portAula1->setDefectuoso(true);

 echo "-----DATOS DE PORTAULA1-----<br>";
 $portAula1->muesraPortatil();
 echo "<hr>";
 $portAula1->setDefectuoso(false);
 $portAula1->muesraPortatil();
 echo "<hr>";
 echo "-----DATOS DE PORTAULA2-----<br>";
 $portAula2->muesraPortatil();
?>