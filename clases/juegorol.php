<?php
    class Personaje{
        public $nombre;
        public $nivel;
        public $vida;
        public $ataque;
        // Atacar a otro personaje
        public function atacar(Personaje $objetivo){
            echo $this->nombre." ataca a ".$objetivo->nombre."\n";
            $objetivo->vida-=$this->ataque;
            if($objetivo->vida <0){
                $objetivo->vida=0;
                echo $objetivo." ha muerto.";
            }
            echo $objetivo->nombre." se ha quedado a ".$objetivo->vida." puntos de vida\n";
        }
        // Curarse
        public function curarse(){
            $curacion=20;
            $this->vida +=$curacion;
            echo $this->nombre." se cura +".$curacion." puntos de vida\n";
            echo"Vida actual: ".$this->vida."\n";
        }
        // Subir de nivel
        public function subirNivel(){
            $this->nivel++; // sube un nivel
            $this->ataque +=5; // 5 puntos de ataque mas
            $this->vida +=10; // 10 puntos de vida mas
            echo $this->nombre." sube a nivel ".$this->nivel."\n";
            echo "Ataque: ".$this->ataque." y Vida: ".$this->vida."\n";
        }
        // Mostrar información
        public function mostrarDetalles(){ // funcion como ejercicios anteriores
            echo"Nombre: $this->nombre\n";
            echo"Nivel: $this->nivel\n";
            echo"Vida: $this->vida\n";
            echo"Ataque: $this->ataque\n";
        }
    }
?>