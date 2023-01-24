<?php
class Cliente
{
    public $nombre;
    private $numero;
    private $dulcesComprados = array();
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
    public function getNumPedidosEfectuados()
    {
        return $this->numPedidosEfectuados;
    }
    public function muestraResumen()
    {
        echo "Nombre: $this->nombre";
        echo "<br>$this->numPedidosEfectuados";
    }
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

        // if ($this->listaDeDulces($d)) {
            $this->numDulcesComprados++;
            $this->numPedidosEfectuados++;
            echo ("<h3>Dulce comprado correctamente</h3>");
            array_push($this->dulcesComprados, $d);
        // }
        // }else if(!$this->listaDeDulces(($d))&&$this->numDulcesComprados>=1){
        //     echo("<h3>No se pudo efectuar la compra ya que ha superado el maximo de dulces</h3>");
        // } else if (!$this->listaDeDulces(($d)) && $this->numDulcesComprados >= 1) {
            
        // }
    }

}
?>