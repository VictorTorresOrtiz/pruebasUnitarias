<?php
include_once("Resumible.php");

    /**
     *  CLASES ABSTRACTAS-
     *  Las clases abstractas son clases que sólo pueden ser heredadas y definen métodos para las clases que las extienden
     * 
     * ¿Hace falta que también los hijos implementen la interfaz?
     * No hace falta, ya que al heredar de esta también implementan la interfaz, teniendo acceso a 
     * la o las funciones de la interfaz
    */     
    
    abstract class Dulces implements Resumible{    
    /**
     * Variables
     *
     * @var mixed
     */
    private $nombre;    
    protected $numero;    
    private $precio;
    const IVA=21/100; 
    
    
    /**
     * Contruccytor
     *
     * @param  mixed $nombre
     * @param  mixed $numero
     * @param  mixed $precio
     * @return void
     */
    public function __construct($nombre,$numero,$precio){
        $this->nombre=$nombre;
        $this->numero=$numero;
        $this->precio=$precio;
    }    
    /**
     * Getters y Setters
     */
    public function getPrecioConIva(){
        return $this->precio + $this->precio* $this::IVA;
    }    
    public function getNombre(){
        return $this->nombre;
    }    
    public function getPrecio(){
        return $this->precio;
    }    
    public function getNumero(){
        return $this->numero;
    }    

        
    /**
     * Monstrar resumen
     *
     * @return void
     */
    public function muestraResumen() :void{
        echo "<br>Nombre: <strong>" . $this->nombre . "</strong>"; 
        echo "<br>Numero de dulce: " . $this->getNumero() . ""; 
        echo "<br>Precio IVA incluido: " . $this->getPrecioConIVA() . " euros";
    }
    
}

?>