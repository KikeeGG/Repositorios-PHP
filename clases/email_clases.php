<?php
    class Notificacion{
        public $mensaje;

        public function __construct($nuevoMensaje){ //Constructor padre
            $this->mensaje=$nuevoMensaje;
        }
        public function enviar(){  // funcion con echo para mensajito
            echo"Enviando ".$this->mensaje." \n";
        }
    }

    class Email extends Notificacion{
        public $destinatario;

        public function __construct($nuevoMensaje, $nuevoDestinatario){ //Constructor hijo
            parent::__construct($nuevoMensaje); //Llama al padre
            $this->destinatario=$nuevoDestinatario;
        }
        public function enviar(){ // funcion mensajito de la clase hija
            echo"Para ".$this->destinatario. "\n";
            parent::enviar(); //Llama al padre
        }
    }
?>