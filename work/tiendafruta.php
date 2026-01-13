<?php
$productos=[
    "Manzanas" => 1.5,
    "Naranjas" => 2,
    "Sandias" => 5
];
$total=0; //VARIABLES VACIAS
$resultados=[];

if ($_POST){
    foreach($productos as $producto => $precio){
        //COGEMOS LA CANTIDAD 
        $cantidad=$_POST["cantidad_" .$producto];
        $precioTotal=$cantidad * $precio; //SE CALCULA EL TOTAL DE ESE PRODUCTO
        $resultados[$producto]=[ //GUARDAMOS LOS DATOS NUEVO ARRAY
            "cantidad" => $cantidad,
            "precio" => $precio,
            "total" => $precioTotal
        ];
        $total=$total + $precioTotal; //SUMAMOS EL TOTAL FINAL FINAL
    }
}
?>

<!-- FORMULARIO PARA CANTIDADES A COMPRAR -->
<form method="post">
<?php
foreach ($productos as $producto => $precio) { //BUCLE QUE RECORRE PRODUCTO/PRECIO
    echo "<label>$producto - $precio €/ud  </label>";
    echo "<input type='number' name='cantidad_$producto' min='0' value='0'><br>";
}
?>
<br>
<button type="submit">CALCULAR</button>
</form>

<!-- TABLA DINÁMICA -->
<?php
if ($_POST) { //SI RECIVE EL POST, PINTAMOS TABLA
    echo"<table border='1'>";
    echo"<tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
        </tr>";
    foreach ($resultados as $producto => $datos) { //BUCLE QUE PINTA LOS RESULTADOS EN LA TABLA
        echo "<tr>";
        echo "<td>$producto</td>";
        echo "<td>{$datos['cantidad']}</td>";
        echo "<td>{$datos['precio']} €</td>";
        echo "<td>{$datos['total']} €</td>";
        echo "</tr>";
    }
    echo "<tr>
            <th colspan='3'>TOTAL</th>
            <th>$total €</th>
          </tr>";
    echo "</table>";
}
?>