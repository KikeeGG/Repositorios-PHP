<?php
//Uso de isset para asegurar que se pulsó GENERAR
if (isset($_POST["filas"])&& isset($_POST["columnas"])){
    $filas=$_POST["filas"];
    $columnas=$_POST["columnas"];
    $contador=1; //Contador secuencial
    echo"<table border='1'>"; //como se pide en el enunciado

    //bucles anidados
    for ($f=1; $f <= $filas; $f++){
        echo"<tr>";
        for ($c=1; $c <= $columnas; $c++){
            echo"<td>".$contador."</td>";
            $contador++; //cada vez que completemos una celda, +1
        }
        echo"</tr>";
    }
    echo"</table>";
}
?>
<!-- Formulario filas y columnas -->
<form method="POST" action="">
    <label>Filas:</label>
    <input type="number" name="filas"><br><br>
    <label>Columnas:</label>
    <input type="number" name="columnas"><br><br>
    <button type="submit">GENERAR</button>
</form>