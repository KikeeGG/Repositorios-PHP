<?php
    class Login{
        public $usuario;
        public $password;

        public function __construct($nuevoUsuario, $nuevaContraseña){ // constructor
            $this->usuario=$nuevoUsuario;
            $this->password=$nuevaContraseña;
        }
        public function comprobar(){
            if($this->password=="1234"){ // bucle sencillo para comprobar contraseña
                echo"Acceso concedido, ".$this->usuario;
            }else{
                echo"Contraseña incorrecta";
            }
        }
    }
?>