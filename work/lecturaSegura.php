<?php
    function leerArchivoSeguro($nombreArchivo){ //Crear funcion
        if(!file_exists($nombreArchivo)){ //Si el archivo no existe, excepcion
            throw new Exception("El archivo no existe");
        }
        if(!is_readable($nombreArchivo)){ //Si el archivo no es legible, excepcion
            throw new Exception("El archivo no se puede leer");
        }
        return file_get_contents($nombreArchivo);
    }
    try{
        $contenido=leerArchivoSeguro("notas.txt"); //try catch para el codigo principal
        echo nl2br($contenido);
    }catch(Exception $e){ //Recoge las excepciones
        echo "Error al leer archivo: ".$e->getMessage();
        $mensaje=date("Y-m-d H:i:s")." - ".$e->getMessage().PHP_EOL; //.PHP_EOL realiza saltos de linea
        file_put_contents("errores.log", $mensaje, FILE_APPEND); //Guardar en errores.log
    }
?>