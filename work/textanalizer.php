<?php
if($_POST){ //bucle post
    $texto=$_POST["texto"];
    echo"<h3>Resumen del contenido: </h3>";

    echo"Total de letras: ".strlen($texto). "<br>"; //contar caracteres
    echo "Total de palabras: ".str_word_count($texto). "<br>"; //contar palabras
    echo "Texto al revés: " .strrev($texto). "<br>"; //texto al reves
    if (str_contains($texto, "PHP")) { //bulce que busca si se ha escrito "PHP"
        echo "La palabra 'PHP' SÍ aparece en el texto.<br>";
    } else {
        echo "La palabra 'PHP' NO aparece en el texto.<br>";
    }
}
?>
<!-- FORMULARIO -->
 <form method="post">
    <textarea name="texto" rows="8" cols="50"></textarea><br><br>
    <button type="submit">¡ANALIZAR!</button>
</form>