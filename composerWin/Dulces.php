<?php 
include_once("vendor/autoload.php");
    abstract  class Dulces implements Resumible{
    private $nombre;
    protected $numero;
    private $precio;
    const IVA=21/100;
    
    public function __construct($nombre,$numero,$precio){
        $this->nombre=$nombre;
        $this->numero=$numero;
        $this->precio=$precio;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function getPrecioConIva(){
        return $this->precio + $this->precio* $this::IVA;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function muestraResumen(): void //Introducimos VOID por la interfaz creada anteriormente
    {
        echo "<p>Nombre: $this->nombre</p>        
        <p>Precio: " . $this->getPrecio() . " euros</p>
        <p>Precio con IVA: " . $this->getPrecioConIva() . " euros</p>";
    }
    
}

?>