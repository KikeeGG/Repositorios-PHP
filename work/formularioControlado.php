<?php
    function validarFormulario($nombre, $email, $edad, $comentario){ //funcion con throws para validar formulario
        if(strlen($nombre)<3){
            throw new Exception(("El nombre debe tener al menos 3 letras"));
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Email no válido");
        }
        if(!is_numeric($edad)||$edad<1||$edad>99){
            throw new Exception("La edad debe ser un número entre 1 y 99");
        }
        if(strlen($comentario)>200){
            throw new Exception("El comentario no puede ser tan largo (máx. 200)");
        }
    }
    if($_POST){
        try{
            $nombre=trim($_POST["nombre"]); // recibimos con $_POST
            $email=trim($_POST["email"]); // trim quita los espacios en blanco antes y despues del str
            $edad=trim($_POST["edad"]);
            $comentario=trim($_POST["comentario"]);
            validarFormulario($nombre, $email, $edad, $comentario); // llamamos a la funcion
            $fecha=date("Y-m-d H:i:s");
            //limpiar para guardar
            $nombre=htmlspecialchars($nombre); //Protección necesaria para el apartado del enunciado anti XSS
            $email=htmlspecialchars($email); //htmlspecialchars evita que se ejecute codigo html o php no deseado
            $comentario=htmlspecialchars($comentario);
            $linea="$fecha | $nombre | $email | $edad | $comentario".PHP_EOL; // mejor que n\
            if(!file_put_contents("registros.txt", $linea, FILE_APPEND)){
                throw new Exception("No se ha podido escribir en registros.txt");
            }
            echo"<h3>GUARDADO CORRECTAMENTE</h3>";
        }catch(Exception $e){
            echo"<h3>Error: ".$e->getMessage();
            $fecha=date("Y-m-d H:i:s");
            $archivo=basename(__FILE__); // "__FILE__" Contiene la ruta completa del archivo actual
            $lineaError=$e->getLine();
            $log = "$fecha | EJ29 | ".$e->getMessage()." | $archivo | $lineaError".PHP_EOL;
            file_put_contents("errores5.log", $log, FILE_APPEND);
        }
    }
?>
<!-- FORMULARIO -->
<form method="post">
    <h3>Formulario</h3>
    Nombre:<br>
    <input type="text" name="nombre" required><br>
    Email:<br>
    <input type="text" name="email" required><br>
    Edad:<br>
    <input type="number" name="edad" required><br>
    Comentario:<br>
    <textarea name="comentario"></textarea><br>
    <button type="submit">ENVIAR</button>
</form>