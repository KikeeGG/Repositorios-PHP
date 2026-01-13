<!-- ERRORES 1 -->
 <?php
    function validarEdad($edad){
        if(!is_numeric($edad)){
            throw new Exception("La edad ha de ser un número");
        }
        if($edad<0){
            throw new Exception("La edad no puede ser negativa");
        }
        return $edad;
    }
    try{
        $edad=-5;
        $edadValida=validarEdad($edad);
        echo"Edad válida: $edadValida años";
    }catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }
 ?>
<!-- ERRORES 2 -->
<?php
    function leerArchivoSeguro($nombreArchivo){
        if(!file_exists($nombreArchivo)){
            throw new Exception("El archivo no existe");
        }
        if(!is_readable($nombreArchivo)){
            throw new Exception("No se puede leer el archivo");
        }
        return file_get_contents($nombreArchivo);
    }
    try{
        $contenido=leerArchivoSeguro("datos.txt");
        echo nl2br($contenido);
    }catch(Exception $e){
        echo "Error al leer archivo: ".$e->getMessage();
    }
?>