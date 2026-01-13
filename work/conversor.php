<?php
if(isset($_POST["cantidad"])&& isset($_POST["tipo"])){ //isset para asegurar que se mande el formulario
    $cantidad=$_POST["cantidad"];
    $tipo=$_POST["tipo"];
    switch($tipo){ //bucle switch
        case "euros_dolares":
            $resultado=$cantidad*1.08; //conversion euros
            echo"<p>$cantidad Euros equivalen a $resultado Dólares</p>";
        case "dolares_euros":
            if($tipo=="dolares_euros"){ //bucle para evitar uso de break
                $resultado=$cantidad*0.93;
                echo"<p>$cantidad Dolares equivalen a $resultado Euros</p>";
            }
        case "metros_pies": //metros a pies
            if($tipo=="metros_pies"){
                $resultado=$cantidad*3.28084;
                echo"<p>$cantidad Metros equivalen a $resultado Pies</p>";
            }
        case "pies_metros": //pies a metros
            if($tipo=="metros_pies"){
                $resultado=$cantidad*0.3048;
                echo"<p>$cantidad Pies equivalen a $resultado Metros</p>";
            }
    }
}
?>
<!-- FORMULARIO -->
<form method="POST" action="">
    <label>Cantidad:</label>
    <input type="number" name="cantidad"><br><br>
    <label>Qué buscamos hacer:</label>
    <select name="tipo">
        <option value="euros_dolares">Euros a Dólares</option>
        <option value="dolares_euros">Dólares a Euros</option>
        <option value="metros_pies">Metros a Pies</option>
        <option value="pies_metros">Pies a Metros</option>
    </select><br><br>
    <button type="submit">CONVERTIR</button>
</form>