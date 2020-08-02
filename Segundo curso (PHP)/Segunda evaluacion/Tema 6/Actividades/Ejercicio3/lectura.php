
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

<?php 
$xml=simplexml_load_file("coches.xml"); 
echo "<table>";
foreach($xml as $dato){
    echo "<tr>";
            foreach($dato as $valor){

                  echo "<td>".$valor."</td>";
}
    echo "</tr>";
      }

    echo "</table>";
?>
