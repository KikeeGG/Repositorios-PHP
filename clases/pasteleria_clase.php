<?php
    class Producto{
        public $nombre;
        public $precio;
        public function __construct($nuevoNombre, $nuevoPrecio){ // Constructor de la clase padre
            $this->nombre=$nuevoNombre;
            $this->precio=$nuevoPrecio;
        }
    }

    class Pastel extends Producto{
        public $sabor;
        public function __construct($nuevoNombre, $nuevoPrecio, $nuevoSabor){ //Constructor hijo
            parent::__construct($nuevoNombre, $nuevoPrecio); //Con cosas del padre
            $this->sabor=$nuevoSabor;
        }
        public function etiqueta(){
            echo"Pastel de sabor ".$this->sabor." con nombre ".$this->nombre." y precio de ".$this->precio;
        }
    }
?>