<?php
    class Producto{
        public $descripcion;
        public $preciosinIva;

        public function __construct($nuevoNombre, $nuevoPrecio){ //Constructor para dar valores a los atributos
            $this->descripcion = $nuevoNombre;
            $this->preciosinIva = $nuevoPrecio; 
        }
        public function precioFinal(){
            $precioFinal=$this->preciosinIva * 1.21; // Calculo del precio con iva
            return $precioFinal;
        }
    }
?>