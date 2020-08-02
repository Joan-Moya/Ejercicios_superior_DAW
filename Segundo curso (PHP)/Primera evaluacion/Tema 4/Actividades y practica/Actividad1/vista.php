<html>
    <head>
        <title></title>
    </head>
    <body>
        <table>
            <tr><td>codigo</td><td>nombre</td><td>apellidos</td><td>direccion</td><td>poblacion</td><td>codigo postal</td><td>telefono</td><td>email</td><td>calificaciones</td><tr>
            <?php
                foreach($datos as $indice => $valor){
                    echo "<tr>";
                        foreach($valor as $pos => $dato){
                            echo "<td>".$dato."</td>";
                        }
                    }
                    echo "</tr>";
                ?>
        </table>
    </body>
</html>
