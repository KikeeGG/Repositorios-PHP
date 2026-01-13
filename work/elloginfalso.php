<?php
//ARRAY USUARIOS
$usuarios = [
    ["nombre" => "Ana", "contraseña" => 1234],
    ["nombre" => "Miguel", "contraseña" => 1222],
    ["nombre" => "Andres", "contraseña" => 2221]
];
//SE MANDA EL POST DEL FORMULARIO AL PHP
if ($_POST) {
    $usuarioIngresado = $_POST['usuario'];
    $contraseñaIngresada = $_POST['contraseña'];
    $encontrado = false;
    foreach ($usuarios as $usuario) { //RECORREMOS EL BUCLE PARA ENCONTRAR COINCIDENCIAS DEL POST
        if ($usuario["nombre"] == $usuarioIngresado && $usuario["contraseña"] == $contraseñaIngresada) {
            $encontrado = true;
            echo "<h2 style='color:green;'>Hola de nuevo ".$usuario["nombre"]."</h2>"; //COINCIDE, GREEN
        }
    }
    if (!$encontrado) {
        echo "<h2 style='color:red;'>Acceso denegado</h2>"; //NO COINCIDE, RED
    }
}
?>
<!-- FORMULARIO -->
 <form method="post">
  <input type="text" name="usuario" placeholder="Usuario" required>
  <input type="password" name="contraseña" placeholder="Contraseña" required>
  <button type="submit">Entrar</button>
</form>