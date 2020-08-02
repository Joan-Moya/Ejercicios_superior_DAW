
<style>
        table{
            border:1px black solid;
            border-collapse:collapse;
        }
        td{
            border:1px black solid;
            border-collapse:collapse;
        }

        tr{
            border:1px black solid;
            border-collapse:collapse;
        }
</style>



<form action="" method="post">
            Pon el origen<input type="text" name="origen"><br>
            Pon el destino<input type="text" name="destino"><br>
            Pon el precio<input type="text" name="precio"><br>
            <input type="submit" value="Comprobar">
    </form>

<?php

$origen = $_POST["origen"];
$destino = $_POST["destino"];
$precio = $_POST["precio"];

$fichero = fopen("vuelo.csv","w"); 

    fputcsv($fichero, $_POST, ";"); 

    fclose($fichero);

$fichero = fopen("vuelo.csv","r"); 

    echo "<table>";

    echo "<tr>";
    echo "<td> Origen </td>";
    echo "<td> Destino </td>";
    echo "<td> Precio </td>";
    echo "</tr>";

    

while($registro=fgetcsv($fichero,0,";")){
        echo "<tr>";
        echo "<td>".$registro[0]."</td>";
        echo "<td>".$registro[1]."</td>";
        echo "<td>".$registro[2]."</td>";
        echo "</tr>";
}
    echo "</table>";

fclose($fichero);
?>