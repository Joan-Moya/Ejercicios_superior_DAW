

<?php
$ds = disk_total_space("/");
$df = disk_free_space("/");
echo "Espacio total en disco= ".$ds."<br>";
echo "Espacio disponible en disco= ".$df;



?>