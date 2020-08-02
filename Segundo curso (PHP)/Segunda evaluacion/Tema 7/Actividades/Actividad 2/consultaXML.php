<html lang="es">
<head>
<meta charset="UTF-8">
<title>Consulta XML</title>
        <style>
            .tabla{
            border: 1px solid black;
            border-collapse: collapse;
            margin: 30px;
            }
            .cabecera {
            border: 1px solid black;
            background-color: red;
            color: white;
            width: 100px;
            }
            .celda {
            border: 1px solid black;
            width: 150px;
            text-align: right;
            }
        </style>
</head>
<body>

<?php

        if(isset($_GET['codigo'])){
            $codigo=$_GET['codigo'];
            $url="http://localhost/Tema%207/Actividades/Actividad%202/buscaXML.PHP?codigo=".$codigo;
            $xml = file_get_contents($url);
            $array = (array)simplexml_load_string($xml);

            if(sizeof($array)>0){
                echo "<table class='tabla'>";

                    foreach($array as $key=>$valor){
                        echo "<tr><td class='cabecera'>".$key."</td><td class='celda'>".$valor."</td></tr>";
                    }
                         echo "</table>";
            } else {
                echo "Empleado no Existe";
            }
        }
?>

        <form action="" method="GET">
            <label for="codigo">Introducir Código:</label>
            <input type="text" name="codigo">
            <button type="submit">Consultar</button>
        </form>
</body>
</html>