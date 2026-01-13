<?php
    if ($_POST){
        $usuario=$_POST["opcion"];
        echo "<h3>Ha ganado...</h3>";
        $opciones=["Piedra","Papel","Tijera"]; // opciones
        $cpu=$opciones[rand(0, 2)]; // random para que la cpu elija ua de las 3
        echo "Has elegido: <strong>$usuario</strong><br>";
        echo "CPU ha elegido: <strong>$cpu</strong><br>";
        // bucle decidir resultado
        if ($usuario==$cpu){
            echo "<h2>EMPATE</h2>";
        }else{
            if( 
                ($usuario=="Piedra"&&$cpu=="Tijera")||($usuario=="Papel"&&$cpu=="Piedra")||($usuario=="Tijera"&&$cpu=="Papel") // || y && compara resultados
            ){
                echo "<h2>¡HAS GANADO!</h2>";
            }else{
                echo "<h2>HA GANADO LA CPU</h2>";
            }
        }
    };
?>
<!-- FORMULARIO -->
<form method="post">
    <h3>Elige:</h3>
    <input type="radio" name="opcion" value="Piedra" required>Piedra <br>
    <input type="radio" name="opcion" value="Papel" required>Papel <br>
    <input type="radio" name="opcion" value="Tijera" required>Tijera <br><br>
    <button type="submit">JUGAR</button>
</form>