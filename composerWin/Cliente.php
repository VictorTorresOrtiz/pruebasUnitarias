<?php


include_once("vendor/autoload.php");


class Cliente
{
    public $nombre;
    private $numero;
    private $dulcesComprados = [];
    private $numDulcesComprados;
    private $numPedidosEfectuados;

    public function __construct($nombre, $numero, $numPedidosEfectuados = 0)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->numPedidosEfectuados = $numPedidosEfectuados;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function setNumPedidosEfectuados($numPedido)
    {
        $this->numPedidosEfectuados = $numPedido;
    }
    public function getNumPedidosEfectuados()
    {
        return $this->numPedidosEfectuados;
    }

    public function listaDeDulces(Dulces $candy)
    {
        if (in_array($candy, $this->dulcesComprados)) {
            return true;
        } else {
            return false;
        }
    }
    public function comprar(Dulces $candy)
    {
        try {
            array_push($this->dulcesComprados, $candy);
            $this->setNumPedidosEfectuados($this->getNumPedidosEfectuados() + 1);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function muestraResumen()
    {
        return "<li>Nombre: $this->nombre</li>        
            <ul><li>Número de pedidos efectuados: " . $this->getNumPedidosEfectuados() . "</li></ul>";
    }

}
?>