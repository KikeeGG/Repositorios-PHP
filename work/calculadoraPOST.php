<!DOCTYPE html>
<html lang="es">
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora Básica</h1>
    <!--FORMULARIO-->
    <form action="" method="POST">
        <input type="number" name="num1" placeholder="Número 1" required>
        <select name="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multi">Multiplicar</option>
        </select>
        <input type="number" name="num2" placeholder="Número 2" required>
        <input type="submit" value="Calcular">
    </form>
    <hr>

    <?php
        // Solo ejecutamos esto si el usuario le dio al botón (si hay envío POST)
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            
            // Recogemos los datos del array asociativo $_POST
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $op = $_POST['operacion'];
            $resultado = 0;
            // Decidimos qué hacer
            if ($op == "suma") {
                $resultado = $n1 + $n2;
                $simbolo = "+";
            } elseif ($op == "resta") {
                $resultado = $n1 - $n2;
                $simbolo = "-";
            } elseif ($op == "multi") {
                $resultado = $n1 * $n2;
                $simbolo = "x";
            }
            // Mostramos el resultado
            echo "<h2>Resultado: $n1 $simbolo $n2 = $resultado</h2>";
        }
    ?>
</body>
</html>