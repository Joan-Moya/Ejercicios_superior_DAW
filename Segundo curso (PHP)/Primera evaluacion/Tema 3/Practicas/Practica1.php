<?php

$alumnos = array(
    array("Codigo"=>1005,"Nombre"=>"Luis","Apellidos"=>"Sanchez ros","Direccion"=>"Calle Olta,23","Poblacion"=>"Valencia","codPostal"=>46004,"Telefono"=>653852125,"Email"=>"luis@gmail.com","Calificacion"=>"Apto")
,   array("Codigo"=>1015,"Nombre"=>"Marta","Apellidos"=>"Ramos solis","Direccion"=>"Calle Sorni,42","Poblacion"=>"Valencia","codPostal"=>46026,"Telefono"=>621589336,"Email"=>"marta@gmail.com","Calificacion"=>"No apto")
,   array("Codigo"=>1203,"Nombre"=>"Sara","Apellidos"=>"Mas Marti","Direccion"=>"Calle Romeral,9","Poblacion"=>"Madrid","codPostal"=>28080,"Telefono"=>647522001,"Email"=>"sara@gmail.com","Calificacion"=>"Apto")
,   array("Codigo"=>1486,"Nombre"=>"angel","Apellidos"=>"Foios Molto","Direccion"=>"Calle Sastre,10","Poblacion"=>"Madrid","codPostal"=>28012,"Telefono"=>698411223,"Email"=>"angel@gmail.com","Calificacion"=>"No apto")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Practica1</title>

        <style> 

            table,td{
                border: 1px solid black;
                border-collapse: collapse;
            }

        </style>





</head>
<body>

<h1>Listado de alumnos de valencia</h1>
    <table>
        <tr>
            <?php 
            foreach($alumnos[0] as $pos=>$valor){
                echo "<td>$pos</td>";
            }
            ?>
        </tr>
            <?php 
            foreach($alumnos as $alumno){
                if($alumno["Poblacion"]=="Valencia"){
                    echo "<tr>";
                    foreach($alumno as $valor){       
                            echo "<td>$valor</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
    </table>


<h1>Listado de alumnos no aptos</h1>
    <table>
        <tr>
            <?php 
            foreach($alumnos[0] as $pos=>$valor){
                echo "<td>$pos</td>";
            }
            ?>
        </tr>
            <?php 
            foreach($alumnos as $alumno){
                if($alumno["Calificacion"]=="No apto"){
                    echo "<tr>";
                    foreach($alumno as $valor){       
                            echo "<td>$valor</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
    </table>

<h1>Listado de alumnos aptos de Madrid</h1>
    <table>
        <tr>
            <?php 
            foreach($alumnos[0] as $pos=>$valor){
                echo "<td>$pos</td>";
            }
            ?>
        </tr>
            <?php 
            foreach($alumnos as $alumno){
                if($alumno["Calificacion"]=="Apto" && $alumno["Poblacion"]=="Madrid"){
                    echo "<tr>";
                    foreach($alumno as $valor){       
                            echo "<td>$valor</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
    </table>

<h1>Listado de alumnos aptos de Valencia</h1>
    <table>
        <tr>
            <?php 
            foreach($alumnos[0] as $pos=>$valor){
                echo "<td>$pos</td>";
            }
            ?>
        </tr>
            <?php 
            foreach($alumnos as $alumno){
                if($alumno["Calificacion"]=="Apto" && $alumno["Poblacion"]=="Valencia"){
                    echo "<tr>";
                    foreach($alumno as $valor){       
                            echo "<td>$valor</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
    </table>
</body>
</html>