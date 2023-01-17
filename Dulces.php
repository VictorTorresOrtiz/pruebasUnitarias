<?php


abstract class Dulce {

    //Variables
    private const IVA = 0.21;
    public String $nombre;
    protected int $numero;
    private int $precio;

    //Constructor
    public function __construct(String $nombre, int $numero, int $precio){
        $this -> nombre = $nombre;
        $this -> numero = $numero;
        $this -> precio = $precio;
    }

    public function getPrecio(){
        return $this -> precio;
    }

    public function getPrecioConIva(){
        return $this -> precio + ($this -> precio * self::IVA);
    }

    public function getNumero(){
        return $this -> numero;
    }

    public function muestraResumen(){

        echo "Nombre: " . $this -> nombre . ", número: " . $this -> numero . ", precio: " . $this -> precio;    
    }
}