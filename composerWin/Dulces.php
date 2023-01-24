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

    /**
     * Dulces
     */    
    
    abstract class Dulces implements Resumible{    
    /**
     * nombre
     *
     * @var mixed
     */
    private $nombre;    
    /**
     * numero
     *
     * @var mixed
     */
    protected $numero;    
    
    /**
     * precio
     *
     * @var mixed
     */
    private $precio;
    const IVA=21/100;
        
    /**
     * __construct
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
     * getPrecioConIva
     *
     * @return void
     */
    public function getPrecioConIva(){
        return $this->precio + $this->precio* $this::IVA;
    }    
    /**
     * getNombre
     *
     * @return void
     */
    public function getNombre(){
        return $this->nombre;
    }    
    /**
     * getPrecio
     *
     * @return void
     */
    public function getPrecio(){
        return $this->precio;
    }    
    /**
     * getNumero
     *
     * @return void
     */
    public function getNumero(){
        return $this->numero;
    }    
    /**
     * muestraResumen
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