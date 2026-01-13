<h3>EJERCICIO 1</h3>
<?php
$productos = [
    "Pan" => 1,
    "Leche" => 2,
    "Huevos" => 3
];
echo "<ul> Lista de la compra:<br>";
foreach ($productos as $producto => $detalle) {
    echo "<li>$detalle: $producto</li>";
    }
echo "</ul>";
?>

<h3>EJERCICIO 2</h3>
<?php
$clase = [
    ["nombre" => "Ana", "nota" => 9],
    ["nombre" => "Luis", "nota" => 7],
    ["nombre" => "María", "nota" => 8]
];
foreach ($clase as $alumno) {
    echo"El alumno ".$alumno["nombre"]." tiene una nota de ".$alumno["nota"]."<br>";
}
?>