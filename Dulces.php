<?php

class Dulce{
    public function __construct(String $nombre, int $numero, int $precio)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->precio = $precio;
    }
    public function getPrecio(){
        return $this-> precio;
    }

    public function muestraResumen(){

        echo "Nombre: " . $this -> nombre . ", número: " . $this -> numero . ", precio: " . $this -> precio;    
    }
    
}





?>