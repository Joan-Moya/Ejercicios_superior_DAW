
<?php
$nombreYapellidos = $_POST['nombreYapellidos'];
$dni = $_POST['dni'];
$pelicula = $_POST['peliculas'];
$fecha= $_POST['fecha'];
$entradas = $_POST['entradas'];
$tarjeta = $_POST['tarjetas'];
$numeroTarjeta = $_POST['numerotarjeta'];
$telefono = $_POST['Telefono'];
$correo = $_POST['Correo'];

if(isset($_POST['info'])){
$check = "Si";
}else{
    $check ="No";
}


?>

<html>
    <head>
        <style>
            table,td,rt{
                border:1px black solid;
                border-collapse:collapse;
            }
        </style>
    </head>
<body>

    <br><br><br><br>

 <table>
     <tr>
     <td>Nombre y apellidos</td><td>Dni</td>
    </tr>
    <tr>
     <td><?php echo $nombreYapellidos; ?></td><td><?php echo $dni; ?></td>
    </tr>
</table>

<br><br><br>

<table>
     <tr>
     <td>Peliculas</td><td>Entrada</td><td>Fecha</td>
    </tr>
    <tr>
     <td><?php echo $pelicula; ?></td><td><?php echo $entradas; ?></td><td><?php echo $fecha; ?></td>
    </tr>
</table>

<br><br><br>

<table>
     <tr>
     <td>N tarjeta</td><td>Tipo de tarjeta</td>
    </tr>
    <tr>
     <td><?php echo $numeroTarjeta; ?></td><td><?php echo $tarjeta; ?></td>
    </tr>
</table>

<br><br><br>

<table>
     <tr>
     <td>Telefono</td><td>Correo</td><td>Recibir info</td>
    </tr>
    <tr>
     <td><?php echo $telefono; ?></td><td><?php echo $correo; ?></td><td><?php echo $check; ?></td>
    </tr>
</table>


</body>
</html>