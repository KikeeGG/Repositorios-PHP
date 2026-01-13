<?php
//De nuevo, isset para comprobar que el formulario fue enviado
if(isset($_POST["cantidad"])){
    $cantidad=$_POST["cantidad"];
    $total=0; //variable tiradas en 0
    //bucle tiradas
    for($i=1; $i <= $cantidad; $i++){
        $numero=rand(1,6); //rand para num aleatorio
        $total=$total+$numero; //se va sumando a la variable
        echo"<div class='dado'>".$numero."</div>"; //mostrar tirada en div
    }
    echo"<p>La suma total es: ".$total."</p>"; //total
}
?>
<!-- FORMULARIO -->
<form method="POST" action="">
    <label>¿Cuántos dados lanzamos?</label>
    <input type="number" name="cantidad" min="1">
    <button type="submit">¡LANZA!</button>
</form>
<style>
    .dado{
        width: 60px;
        height: 60px;
        border: 2px solid black;
        text-align: center;
        margin: 5px;
        padding: 5px;
        line-height: 70px;
    }
</style>