<form id="form1" method="POST" action="">
        Moneda de origen 
        <select name="morigen">
            <option value="AUD">Australian dollar</option> 
            <option value="CAD">Canadian dollar</option> 
            <option value="EUR">Euro</option>
            <option value="GBP">Pound sterling</option> 
            <option value="JPY">Japanese yen</option> 
            <option value="MXN">Mexican peso</option> 
        </select>


        Moneda de destino 
        <select name="mcambio">
            <option value="AUD">Australian dollar</option> 
            <option value="CAD">Canadian dollar</option> 
            <option value="EUR">Euro</option>
            <option value="GBP">Pound sterling</option> 
            <option value="JPY">Japanese yen</option> 
            <option value="MXN">Mexican peso</option> 
        </select>


        Cantidad <input type="text" name="cantidad"><br>
<input type="submit" name="boton" value="Consultar"><br>
</form>

<?php
        if (isset($_POST['boton'])){
     

                    $MonedaOrigen = $_POST['morigen'];
                    $MonedaDestino= $_POST['mcambio'];
                    $Cantidad= $_POST['cantidad'];

                    
                    $url="https://forex.1forge.com/1.0.3/convert?from=".$MonedaOrigen."&to=".$MonedaDestino.
                    "&quantity=".$Cantidad."&api_key=EYxLFnPRzHrCO6mKA07X18bbmYisbL7p";

                    
                    $json = file_get_contents($url);

                    $array = json_decode($json, true);
               
                   $cambio= $array["value"];
                   $tiempo= date("d/m/Y H:i:s",$array["timestamp"]);

                   echo ($Cantidad." ".$MonedaOrigen." a ".$MonedaDestino." es ".$cambio." a ".$tiempo );

        }
?>