<?php
    function registrarError($mensaje){ //Funcion registrar errores
        $fecha=date("Y-m-d H:i:s");
        $archivo=basename(__FILE__); // __FILE__ obtiene el nombre del archivo actual
        $lineaError=__LINE__; // lo mismo pero con el numero de linea
        $log="$fecha | $mensaje | $archivo | $lineaError".PHP_EOL; // guarda con salto de linea
        file_put_contents("errores6.log", $log, FILE_APPEND);
    }
    try{
        if(!file_exists("registros.txt")){
            throw new Exception("No existe registros.txt"); //si no hay .txt
        }
        $lineas=file("registros.txt");
        if(!$lineas){
            throw new Exception("El archivo esta vacio"); //si esta vacio el .txt
        }
        echo"Registros en la tabla:";
        echo"<table border='1'>";
        echo "<tr><th>Fecha y Hora</th><th>Nombre</th><th>Email</th><th>Edad</th><th>Comentario</th></tr>";
        foreach($lineas as $linea){ //bulce foreach para cada linea del fichero
            $linea=trim($linea);
            $campos=explode("|",$linea); //separa campos con |
            if(count($campos)==5){ // Comprueba si la línea tiene exactamente 5 campos
                $fecha=trim($campos[0]); // Asigna cada campo eliminando espacios sobrantes
                $nombre=trim($campos[1]);
                $email=trim($campos[2]);
                $edad=trim($campos[3]);
                $comentario=trim($campos[4]);
                echo "<tr>";
                echo "<td>$fecha</td>";
                echo "<td>$nombre</td>";
                echo "<td>$email</td>";
                echo "<td>$edad</td>";
                echo "<td>$comentario</td>";
                echo "</tr>";
            }else{
            echo "<tr><td colspan='5'>Registro inválido</td></tr>"; // Línea incorrecta
            registrarError("Línea mal formateada: $linea"); // Lo registra con la funcion
            }
        }
        echo"</table>";
    }catch(Exception $e){
        echo "<h3>No hay registros todavía.</h3>";
        registrarError($e->getMessage()); //registra en el log
    }
?>