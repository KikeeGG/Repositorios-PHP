<!--PARTE PHP-->
<?php
    try{
        if(!file_exists("agenda.txt")){ //throw por si no existe fichero
            throw new Exception("No existe el fichero agenda.txt");
        }
        $lineas=file("agenda.txt");
    }catch(Exception $e){
        echo"<h3>Error: ".$e->getMessage()."</h3>";
        $fecha=date("Y-m-d H:i:s");
        $archivo=basename(__FILE__); //__FILE__ busca el archivo con nombre exacto
        $lineaError=$e->getLine();
        $log="$fecha | EJ31 | ".$e->getMessage()." | $archivo | $lineaError".PHP_EOL; // PHP_EOL es lo mismo que \n pero mas pro
        file_put_contents("errores7.log", $log, FILE_APPEND);
    }
?>
<!--PARTE HTML-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado agenda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3 style="text-align: center;">LISTADO AGENDA</h3>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
        </tr>
        <?php // Inyección php para meter lineas en la tabla 
            if(!empty($lineas)){
                foreach($lineas as $linea){
                    $datos=explode("|", $linea);
                    echo"<tr>";
                    echo "<td>".$datos[0]."</td>";
                    echo "<td>".$datos[1]."</td>";
                    echo "<td>".$datos[2]."</td>";
                    echo"</tr>";
                }
            }
        ?>
    </table>
    <div style="text-align: center;"> <!--Volver al menú, calidad de vida-->
        <a href="index.php">Volver al menú</a>
    </div>
</body>
</html>