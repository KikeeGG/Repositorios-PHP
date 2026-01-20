<?php
    class Empleado{
        public $nombre;
        public $sueldo;
        public $aniosExperiencia;
        // Funciones Empleado
        public function calcularBonus(){
            if($this->aniosExperiencia >=2){
                $tramos=floor($this->aniosExperiencia/2); // floor redondea
                return $this->sueldo*0.05*$tramos;
            }else{
                echo"Bonus no disponible, trabaja mas años";
                return 0;
            }
        }
        public function mostrarDetalles(){ // funcion para informacion
            echo"Nombre: $this->nombre\n";
            echo"Sueldo: $this->sueldo €\n";
            echo"Años de experiencia: $this->aniosExperiencia\n";
        }
    }

    class Consultor extends Empleado{
        public $horasPorProyecto;
        // Funcion para el consultor
        public function calcularBonus(){
            $bonus=parent::calcularBonus(); //parent
            if($this->horasPorProyecto >100){
                $bonus=$bonus+($this->sueldo*0.05);
            }
            return $bonus;
        }
    }
?>