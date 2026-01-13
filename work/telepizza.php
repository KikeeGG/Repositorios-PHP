<?php
if($_POST){
    //Para el precio pizza base
    if($_POST["tamano"]=="pequeña"){ //Bucle que muestra que pizza has seleccionado
        echo"<h3>Tamaño elegido: Pizza pequeña</h3>";
        $precio=5; //establece la bariable base de precio
    }else{
        echo"<h3>Tamaño elegido: Pizza mediana</h3>";
        $precio=10;
    }
    //Si se añaden ingredientes
    if(isset($_POST["ingredientes"])){ //isset nos confirma si se han marcado esas casillas 
        $cantidadIngredientes=count($_POST["ingredientes"]);
        $precio=$precio+$cantidadIngredientes; //como calcular el precio
        echo"<h3>Ingredientes elegidos</h3>";
        echo"<ul>";
        foreach($_POST["ingredientes"] as $ingrediente){ //bucle que muestra las selecciones
            echo"<li>$ingrediente</li>";
        }
        echo"</ul>";
    }else{
        echo"<p>Sin ingredientes.</p>"; //sin ingredientes
    }
    echo"<h3>Precio total: " .$precio. "€ </h3>";
}
?>
<!-- FORMULARIO -->
 <form method="post">
    <p><strong>Tamaño:</strong></p>
    <input type="radio" name="tamano" value="pequena" required>Pequeña (5€)<br>
    <input type="radio" name="tamano" value="mediana">Mediana (10€)<br>
    <p><strong>Ingredientes (+1€ cada uno):</strong></p>
    <input type="checkbox" name="ingredientes[]" value="Jamón">Jamón<br>
    <input type="checkbox" name="ingredientes[]" value="Queso">Queso<br>
    <input type="checkbox" name="ingredientes[]" value="Champiñones">Champiñones<br>
    <br>
    <input type="submit" value="Calcular precio">
</form>