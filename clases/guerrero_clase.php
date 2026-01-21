<?php
    class Personaje{
        public $nombre;
        public $puntosVida;
        public function __construct($nuevoNombre, $nuevaVida){ // Constructor de la clase padre
            $this->nombre=$nuevoNombre;
            $this->puntosVida=$nuevaVida;
        }
    }

    class Guerrero extends Personaje{
        public $arma;
        public function __construct($nuevoNombre, $nuevaVida, $nuevaArma){ //Constructor hijo
            parent::__construct($nuevoNombre, $nuevaVida); //Con cosas del padre
            $this->arma="Espada";
        }
        public function etiqueta(){
            echo"El personaje ".$this->nombre." con vida de ".$this->puntosVida." y blande una ".$this->arma;
        }
    }
?>