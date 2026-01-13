<?php
    if($_POST){
        $altura=(int)$_POST["altura"];
        echo "<h3>¡Pirámide de Super Mario!</h3>";
        // bucle para las filas de la piramide
        for($fila=1; $fila <= $altura; $fila++){
            // bucle para asteriscos de cada fila
            for($columna=1; $columna <= $fila; $columna++){
                echo "*";
            }
            //para saltar linea al final de cada fila
            echo "<br>";
        }
    }
?>
<!--FORMULARIO-->
<form method="post">
    <label>Introduce la altura:</label><br>
    <input type="number" name="altura" min="1" required><br><br>
    <button type="submit">GENERAR PIRÁMIDE</button>
</form>