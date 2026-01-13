<?php
    function guardarUsuarios($nombre, $email){ //Crear funcion
        if(empty($nombre)){ //Si el nombre esta vacío, excepcion
            throw new Exception("El nombre esta vacío");
        }
        if(strpos($email, "@")==false){ // SI no existe @, excepcion
            throw new Exception("El email no es válido");
        }
        // Si todo esta correcto, recoge datos y almacena en usuarios.txt
        $linea=date("Y-m-d H:i:s")." - ".$nombre." - ".$email.PHP_EOL;
        file_put_contents("usuarios.txt", $linea, FILE_APPEND);
    }
    try{ // asignamos valores a las variables
        $nombre="Paco";
        $email="paco@email.com";
        guardarUsuarios($nombre, $email); //llamar a la funcion
        echo"Usuario guardado correctamente";
    }catch(Exception $e){
        echo"Error al guardar usuario: ".$e->getMessage();
        $mensaje=date("Y-m-d H:i:s")." - ".$e->getMessage().PHP_EOL; // de nuevo, realiza saltos de linea
        file_put_contents("errores2.log",$mensaje, FILE_APPEND); //file_put_contents() con FILE_APPEND crea el archivo automáticamente si no existe.
    }
?>