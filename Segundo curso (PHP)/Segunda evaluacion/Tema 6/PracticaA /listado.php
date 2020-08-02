<style>
    table{
        border:1px black solid;
        border-collapse:collapse;
    }
    tr{
        border:1px black solid;
        border-collapse:collapse;
    }
    td{
        border:1px black solid;
        border-collapse:collapse;
    }
</style>


<h1>COCHES CONCESIONARIO</h1>

<a href="menu.php">Volver a menu</a>

<?php
        
        include("conexion.php");
        $sentencia = "Select * from coches_audi";

        $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

        // Muesta el número de registros del resultado de la consulta SQL 
        echo "Registros: ".mysqli_num_rows($consulta);

        // Almacenamos el resultado de la consulta en un array
        while($fila = mysqli_fetch_assoc($consulta)){
            $registros[] = $fila;
        }
         mysqli_free_result($consulta);

         

         include("desconexion.php");

         // Muestra resultado en forma de tabla
         echo "<table class='tabla'>";
         echo "<tr>";
         $cabecera = array("Matricula","Marca","Modelo","Tipo","Motor","Color","Cilindrada","Precio","Extras");
         foreach($cabecera as $dato){
            echo "<td>".$dato."</td>";
         }
         echo "</tr>";

         
         foreach($registros as $registro){
            
             echo "<tr>";
                foreach($registro as $dato){
                    
                    echo "<td>".$dato."</td>";
                }
            echo "</tr>";
         }

         echo "</table>";

        
        
?>