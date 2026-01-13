<?php
$prohibidas = ["tonto", "feo", "loco"]; //Definimos el array de palabras malas
$reemplazos=["*****","***","****"]; //Mismo numero de * que longitud de palabra mala

$texto=$_POST["comentario"];
//Uso del str_replace
$censurado=str_replace($prohibidas,$reemplazos,$texto);
//Enseñar comentario final
echo"<div class='comentario'>Se ha censurado:".$censurado."</div>";
?>
<!-- Formulario -->
<form method="POST" action="">
    <label>Escribe tu comenatario:</label><br>
    <textarea name="comentario" rows="5" cols="50"></textarea>
    <button type="submit">COMENTAR</button>
</form>