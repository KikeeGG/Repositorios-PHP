<?php
    function añadirTarea($tarea){
        if(empty($tarea)){ // Comprueba que la tarea no esté vacía
            throw new Exception("La tarea está vacía");
        }
        $linea = date("Y-m-d H:i:s")." | ".$tarea.PHP_EOL; // Prepara la línea con fecha y texto
        file_put_contents("tareas.txt", $linea, FILE_APPEND); // Guarda la tarea (crea el archivo si no existe)
    }
    function listarTareas(){
        if(!file_exists("tareas.txt")){
            file_put_contents("tareas.txt", ""); // Crea el archivo vacío si no existe
            echo "No hay tareas todavía";
            return;
        }
        $archivo=fopen("tareas.txt", "r"); // Abre el archivo en modo lectura
        while(!feof($archivo)){ //WHILE lee y muestra cada línea
            $linea=fgets($archivo);
            if($linea !== false){
                echo $linea."<br>";
            }
        }
        fclose($archivo);
    }
    try{
        // Menú simulado
        $opcion=1; // 1 = añadir, 2 = listar, 3 = salir
        if($opcion === 1){
            $tarea="";// Variable tarea simulada
            añadirTarea($tarea);
            echo"Tarea añadida correctamente";
        }elseif($opcion ===2){
            listarTareas();
        }elseif($opcion ===3){
            echo "Saliendo del programa";
        }else{
            throw new Exception("Opción no válida");
        }
    }catch(Exception $e){
        echo"Error: ".$e->getMessage();// Muestra el error al usuario
        $mensaje = date("Y-m-d H:i:s")." - ".$e->getMessage().PHP_EOL;
        file_put_contents("errores4.log", $mensaje, FILE_APPEND); //guarda en log
    }
?>