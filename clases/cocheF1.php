<?php
    class CocheF1{
        public $piloto;
        public $velocidad;

        public function __construct($nuevoPiloto){// Constructor
            $this->piloto=$nuevoPiloto;
            $this->velocidad=0; // El coche empieza parado
        }
        public function acelerar(){ // Método acelerar
            $this->velocidad +=20;
            echo "Velocidad actual de Alonso: ".$this->velocidad." km/h \n";
        }
    }
?>
