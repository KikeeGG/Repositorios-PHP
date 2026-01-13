<?php
if ($_POST){
    $euros=(int)$_POST["euros"];
    echo "<h3>Resultado</h3>";
    //floor y % por cada tipo de billete o moneda
    $billete50=floor($euros/50);
    $resto=$euros%50;
    $billete20=floor($resto/20);
    $resto=$resto%20;
    $billete10=floor($resto/10);
    $resto=$resto%10;
    $billete5=floor($resto/5);
    $resto=$resto%5;
    $moneda1euro=$resto; //porque ya no queda mas dinero para fraccionar
    echo "Para $euros necesitas: $billete50 billetes de 50, $billete20 billetes de 20, $billete10 billetes de 10, $billete5 billetes de 5, y $moneda1euro monedas de 1€. ";
};
?>
<!-- FORMULARIO -->
<form method="post">
    <label>Introduce una CANTIDAD en EUROS:</label><br>
    <input type="number" name="euros" min="0" required><br>
    <button type="submit">CALCULAR</button>
</form>