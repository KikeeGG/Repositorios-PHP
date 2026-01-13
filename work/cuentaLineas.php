<?php
    function contarLineas($nombreArchivo){
        if(!file_exists($nombreArchivo)){ // Comprueba si el archivo existe
            throw new Exception("El archivo no existe");
        }
        $archivo=fopen($nombreArchivo, "r"); // lo abro en r basandome en el ejercicio anterior
        $contador=0;
        while(!feof($archivo)){
            if(fgets($archivo) !==false){ // Lee una línea y comprueba que no sea false
                $contador++;
            }
        }
        fclose($archivo);
        return $contador; // Devuelve el número de líneas
    }
    try{
        $lineas=contarLineas("usuarios.txt");
        if($lineas===0){
            echo"El archivo está vacío"; // Si el archivo existe pero no tiene líneas
        }else{
            echo"El archivo tiene ".$lineas." líneas"; // Muestra el número de líneas
        }
    }catch(Exception $e){
        echo"Error: ".$e->getMessage(); // Muestra el error al usuario
        $mensaje=date("Y-m-d H:i:s")." - ".$e->getMessage().PHP_EOL;
        file_put_contents("errores3.log",$mensaje, FILE_APPEND);
    }
?>