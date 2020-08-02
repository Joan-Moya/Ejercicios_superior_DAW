<?php
//incluye el fichero php (añade el fichero)
include("objeto.php");

 $productoHardware = new Producto("er45","ProductoHardware","producto123","hardware","34gr",45,4);
 $productoSoftware = new Producto("er44","ProductoSoftware","producto1234","software","0gr",101,6);

 $productoHardware->augmentaStock(12);
 $productoSoftware->disminuyeStock(5);

 echo "-----Datos de la instancia Hardware----- <br>";
 $productoHardware->mostrarDatos();
 echo "<hr>";
 echo "-----Datos de la instancia Software----- <br>";
 $productoSoftware->mostrarDatos();
 echo "<hr>";
 $productoSoftware->ivaProducto(0.20);
 $productoHardware->ivaProducto(0.40);


 echo "-----Datos de la instancia Hardware----- <br>";
 $productoHardware->mostrarDatos();
 echo "<hr>";
 echo "-----Datos de la instancia Software----- <br>";
 $productoSoftware->mostrarDatos();
 echo "<hr>";

?>