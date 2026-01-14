<!--PARTE PHP-->
<?php
    function validarContacto($nombre, $telefono, $email){ // Función para volver el programa a prueba de balas
        if(strlen($nombre)<1){
            throw new Exception("El nombre debe tener al menos 1 letra"); // Para rellenar el campo correctamente
        }
        if(!is_numeric($telefono) || strlen($telefono)<9){
            throw new Exception("El telefono tiene que tener 9 números"); // Para rellenar el campo correctamente
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // Para rellenar el campo correctamente
            throw new Exception("Email no válido");
        }
        if(empty($nombre)){ // Evitar que quede vacío
            throw new Exception("El nombre no puede estar vacío");
        }
        if(empty($telefono)){ // Evitar que quede vacío
            throw new Exception("Email no válido");
        }
        if(empty($email)){ // Evitar que quede vacío
            throw new Exception("Email no válido");
        }
    }
    if($_POST){ // Metodo POST para pillar la informacion del apartado html
        try{
            $nombre=trim($_POST["nombre"]); // trim quita espacios en blanco de en frente y detras
            $telefono=trim($_POST["telefono"]);
            $email=trim($_POST["email"]);
            validarContacto($nombre, $telefono, $email);
            $linea="$nombre | $telefono | $email".PHP_EOL;
            if(!file_put_contents("agenda.txt", $linea, FILE_APPEND)){ // Posible error al escribir en el .txt
                throw new Exception("No se ha escrito en agenda.txt");
            }
            echo"<h3>CONTACTO GUARDADO CORRECTAMENTE!</h3>";
        }catch(Exception $e){
            echo"<h3>Error: ".$e->getMessage()."</h3>";
            $fecha=date("Y-m-d H:i:s");
            $archivo=basename(__FILE__); //__FILE__ busca el archivo con nombre exacto
            $lineaError=$e->getLine();
            $log="$fecha | EJ31 | ".$e->getMessage()." | $archivo | $lineaError".PHP_EOL; // PHP_EOL es lo mismo que \n pero mas pro
            file_put_contents("errores7.log", $log, FILE_APPEND);
        }
    }
?>
<!--PARTE HTML-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor"> <!--FORMULARIO-->
        <h3>Añadir contacto</h3>
        <form method="post">
            Nombre:<br>
            <input type="text" name="nombre" required><br>
            Teléfono:<br>
            <input type="text" name="telefono" required><br>
            Email:<br>
            <input type="text" name="email" required><br><br>
            <button type="submit">GUARDAR</button>
        </form>
        <br>
    </div>
    <div style="text-align: center;"> <!--Volver al menú, calidad de vida-->
        <a href="index.php">Volver al menú</a>
    </div>
</body>
</html>