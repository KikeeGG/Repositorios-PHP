<?php
    class Persona{ // Clase padre
        public $nombre;
        public $edad;
        public function __construct($nuevoNombre, $nuevaEdad){ // Constructor de la clase padre
            $this->nombre=$nuevoNombre;
            $this->edad=$nuevaEdad;
        }
    }

    class Estudiante extends Persona{ // Clase hija
        public $curso;
        public function __construct($nuevoNombre, $nuevaEdad, $nuevoCurso){ // Constructor de la clase hija
            parent::__construct($nuevoNombre, $nuevaEdad); // Llamada al constructor padre
            $this->curso=$nuevoCurso;
        }
    }
?>