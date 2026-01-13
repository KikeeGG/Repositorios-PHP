<!--- Los arrays van con [] -->
<?php
// EJERCICIO 1
$productos = [
    "Pan" => 1,
    "Leche" => 2,
    "Huevos" => 3
];

echo "<ul>Lista de la compra:<br>";
foreach ($productos as $producto => $detalle) {
    echo "<li>$detalle: $producto</li>";
    }
echo "</ul>";
?>