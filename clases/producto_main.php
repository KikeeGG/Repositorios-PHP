<?php
    require("producto_clase.php");
    $producto1=new Producto("Patatas Fritas", 2); // Asignamos valor al producto
    echo"El precio final es: ".$producto1->precioFinal(); // Lo mostramos
?>