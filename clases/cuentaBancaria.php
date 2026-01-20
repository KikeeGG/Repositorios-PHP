<?php
// Se crea la clase
class CuentaBancaria{
    public $titular; // todo en publico ya que lo editaremos
    public $saldo;
    public $tipoDeCuenta;

    public function depositar($cantidad){ // Depositar dinero
        $this->saldo += $cantidad;
    }
    public function retirar($cantidad){ // Retirada de dinero
        if ($cantidad <= $this->saldo){
            $this->saldo -= $cantidad;
        }else{
            echo"Saldo insuficiente, estas pelao. \n";
        }
    }
    public function mostrarInfo(){ //MOstrar info
        echo"Titular: $this->titular \n";
        echo"Tipo de cuenta: $this->tipoDeCuenta \n";
        echo"Saldo: $this->saldo \n";
    }
}
