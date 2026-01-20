<?php
    class Tarea{ // Clase tarea
        public $nombre;
        public $descripcion;
        public $fechaLimite;
        public $estado="Pendiente"; // De esta manera luego nos evitamos bucles para la funcion

        public function marcarComoCompletada(){ //Funcion que cambia la una variable asignada
            $this->estado="Completada";
        }
        public function editarDescripcion($nuevaDescripcion){ // Escribir nueva descripcion
            $this->descripcion=$nuevaDescripcion;
        }
        public function mostrarTarea(){ // Mostrar informacion
            echo"Nombre: $this->nombre \n";
            echo "Descripción: $this->descripcion \n";
            echo "Fecha límite: $this->fechaLimite \n";
            echo "Estado: $this->estado \n";
        }
    }
?>