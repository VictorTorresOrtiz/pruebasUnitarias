<?php

use util\DulceNoCompradoException;
use Monolog\Logger;
use util\LogFactory;

include_once('util/LogFactory.php');

class Cliente
{    
    /**
     * Variables
     *
     * @var mixed
     */
    public $nombre;
    private $numero;
    private $dulcesComprados = [];
    private $numDulcesComprados;
    private $numPedidosEfectuados;
    private Logger $log;     

    
    /**
     * Construcctor
     *
     * @param  mixed $nombre
     * @param  mixed $numero
     * @param  mixed $numPedidosEfectuados
     * @return void
     */
    public function __construct($nombre, $numero, $numPedidosEfectuados = 0)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->numPedidosEfectuados = $numPedidosEfectuados;
        $this->log = LogFactory::getLogger();

    }    
    /**
     * Getters y Setters
     *
     * @return void
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function getDulcesComprados()
    {
        return $this->dulcesComprados;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function getNumPedidosEfectuados()
    {
        return $this->numPedidosEfectuados;
    }    
    /**
     * listaDeDulces
     */
    public function listaDeDulces(Dulces $d)
    {
        if (in_array($d, $this->dulcesComprados)) {
            return true;
        } else {
            return false;
        }
    }
    public function comprar(Dulces $d)
    {
            array_push($this->dulcesComprados, $d);
            $this->numDulcesComprados++;
            $this->numPedidosEfectuados++;
            echo ("Compra Exitosa");
    }
    public function valorar(Dulces $d, String $c)
    {
        try {
            if ($this->listaDeDulces($d)) {
                echo $this->getNombre()." comparte su opinión acerca de ".$d->getNombre().": $c";
            } else {
                throw new DulceNoCompradoException("No es posible la valoración, no esta comprado");
            }
        } catch (DulceNoCompradoException $e){
            echo $e->getMessage();

        }
            
    }
    public function listarPedidos()
    {
        foreach ($this->getDulcesComprados() as $dc) {
            echo "<li>".$dc->getNombre()."</li>";
        }
    }

    public function muestraResumen()
    {
        echo "Nombre: $this->nombre";
        echo "<br>$this->numPedidosEfectuados";
    }

}
?>