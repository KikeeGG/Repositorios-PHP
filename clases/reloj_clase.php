<?php
    class Reloj{
        public $marca;
        public function __construct($nuevaMarca){ // Constructor de la clase padre
            $this->marca=$nuevaMarca;
        }
    }

    class Smartwatch extends Reloj{
        public $sistemaOperativo;
        public function __construct($nuevaMarca, $nuevoSistemaOperativo){ //Constructor hijo
            parent::__construct($nuevaMarca); //Con cosas del padre
            $this->sistemaOperativo=$nuevoSistemaOperativo;
        }
    }
?>