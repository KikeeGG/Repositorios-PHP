<?php
$respuestasCorrectas=[
    "p1"=>"b",
    "p2"=>"a",
    "p3"=>"c"
];
$nota=0; // CONTADOR DE NOTA EN 0
if($_POST){ //BUCLE QUE CHEKEA SI LAS RESPUESTAS SON CORRECTAS
    foreach($respuestasCorrectas as $pregunta => $respuestasCorrecta){
        if($_POST[$pregunta]==$respuestasCorrecta){
            $nota=$nota+1;
        }
    }
}
?>
<!-- FORMULARIO -->
<form method="post">
<p>PREGUNTA 1. ¿Cuánto es 2 + 2?</p>
<input type="radio" name="p1" value="a">3<br>
<input type="radio" name="p1" value="b">4<br>
<input type="radio" name="p1" value="c">5<br>

<p>PREGUNTA 2. ¿Cómo se llama el Rey?</p>
<input type="radio" name="p2" value="a">Felipe<br>
<input type="radio" name="p2" value="b">Carlos<br>
<input type="radio" name="p2" value="c">Marcelo<br>

<p>PREGUNTA 3. ¿Quién se forra todas las navidades?</p>
<input type="radio" name="p3" value="a">Enrique San Francisco<br>
<input type="radio" name="p3" value="b">Jhonny Bravo<br>
<input type="radio" name="p3" value="c">Maria Carey<br>
<br>
<button type="submit">ENVIAR RESPUESTAS</button>
</form>

<?php
//MOSTRAR RESULTADOS
if($_POST){
    echo"   ¡Has acertado $nota de 3!";
}