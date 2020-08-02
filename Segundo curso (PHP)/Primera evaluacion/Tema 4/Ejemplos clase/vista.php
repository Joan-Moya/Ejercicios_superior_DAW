<html>
    <head>
        <title>Consulta de articulos</title>
    </head>
    <body>
        <h1>Datos del Articulo</h1>
        Codigo: <?php echo $articulo[0]; ?><br>
        Descripcion: <?php echo $articulo[1]; ?><br>
        Precio: <?php echo number_format($articulo[2],2,",",".")." €"; ?>
    </body>
</html>
