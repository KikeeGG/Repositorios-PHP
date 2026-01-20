<?php
    class Carrito{
        public $productos=array(); // Creamos array productos
        // FUnciones para crear y quitar productos y calcular total
        public function agregarProducto($nombre, $precio, $cantidad){
            $this->productos[]=array(
                "nombre"=>$nombre,
                "precio"=>$precio,
                "cantidad"=>$cantidad
            );
        }
        public function quitarProducto($nombre){
            foreach($this->productos as $posicion=>$producto){
                if($producto["nombre"]==$nombre){
                    unset($this->productos[$posicion]); //unset quita el producto del array
                }
            }
        }
        public function calcularTotal(){
            $total=0; // seteamos el total primero a 0
            foreach($this->productos as $producto){
                $total=$total+($producto["precio"]*$producto["cantidad"]); // precio por cantidad
            }
            return $total;
        }
        public function mostrarCarrito(){
            foreach($this->productos as $producto){
                echo "Producto: ".$producto["nombre"]."\n";
                echo "Precio: ".$producto["precio"]." €\n";
                echo "Cantidad: ".$producto["cantidad"]."\n";
            }
        }
    }