<?php
    if($_POST){
        $temperaturas=$_POST["temp"];
        echo "<h3>Resumen Temperaturil</h3>";
        //calcular temps
        $maxima=max($temperaturas);
        $minima=min($temperaturas);
        $media=array_sum($temperaturas)/count($temperaturas);
        //salida
        echo "La temperatura MAXIMA ha sido: $maxima grados<br>";
        echo "La temperatura MINIMA ha sido: $minima grados<br>";
        echo "La temperatura MEDIA ha sido: $media grados<br>";
    }
?>
<!--FORMULARIO-->
<form method="post">
    <h3>Introduce las temperaturas:</h3>
    Dia 1: <input type="number" name="temp[]" required><br>
    Dia 2: <input type="number" name="temp[]" required><br>
    Dia 3: <input type="number" name="temp[]" required><br>
    Dia 4: <input type="number" name="temp[]" required><br>
    Dia 5: <input type="number" name="temp[]" required><br>
    <button type="submit">CALCULAR</button>
</form>