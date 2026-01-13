<?php
    function buscarPalabra($nombreArchivo, $palabra){
        if(!file_exists($nombreArchivo)){ // si no existe el archivo
            throw new Exception("El archivo no existe");
        }
        if(empty($palabra)){ // "empty" para ver si la palabra esta vacía
            throw new Exception("La palabra a buscar está vacía");
        }
        $contenido=file_get_contents($nombreArchivo); // pillar el contenido
        return substr_count($contenido, $palabra); // contador
    }
    try{
        $palabra="PHP";
        $veces=buscarPalabra("texto.txt", $palabra); //llamar funcion segun texto.txt
        echo"La palabra ".$palabra." aparece ".$veces." veces";
    }catch(Exception $e){
        echo"Error: ".$e->getMessage();
        $mensaje=date("Y-m-d H:i:s")." - ".$e->getMessage().PHP_EOL;
        file_put_contents("errores.log", $mensaje, FILE_APPEND); // registro en errores.log
    }
?>