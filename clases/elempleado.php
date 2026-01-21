<?php
    class Empleado{
        public $nombre;
        public $puesto;
        public $sueldo;

        public function __construct($nuevoNombre, $nuevoPuesto, $nuevoSueldo){ // Constructor
            $this->nombre=$nuevoNombre;
            $this->puesto=$nuevoPuesto;
            $this->sueldo=$nuevoSueldo;
        }
        public function revisarSueldo(){ // Método revisarSueldo
            if($this->sueldo <1000){ // Bucle si el sueldo es menor a 1000 o no
                $this->sueldo +=200;
                echo "Sueldo actualizado.";
            }else{
                echo "El sueldo es correcto.";
            }
        }
    }
?>