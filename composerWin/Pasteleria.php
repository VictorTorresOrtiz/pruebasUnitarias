<?php
use Monolog\Logger;
use util\LogFactory;

include_once('./util/logFactory.php');



    class Pasteleria{
    private $nombre;
    private $productos = array();
    private $numProductos;
    private $clientes = array();
    private $numClientes;

    private Logger $log; //Creamos la variable Log

    public function __construct($nombre)
    {
        $this->$nombre=$nombre;
        $this->log = LogFactory::getLogger();
    }

    private function incluirProducto(Dulces $dulce){
        array_push($this->productos,$dulce);
        $this->numProductos=$this->numProductos+1;
        return $this;
    }
    public function incluirTarta($nombre,$numero,$precio,$numPisos,$rellenos,$minC,$maxC){
        $tarta = new Tarta($nombre,$numero,$precio,$numPisos, $rellenos, $minC, $maxC);
        array_push($this->productos,$tarta);
        $this->numProductos=$this->numProductos+1;
        return $this;
    }
    public function incluirBollo($nombre,$numero,$precio,$relleno){
        $bollo = new Bollo($nombre,$numero,$precio,$relleno);
        array_push($this->productos,$relleno);
        $this->numProductos=$this->numProductos+1;
        return $this;
    }
    public function incluirChocolate($nombre,$numero,$precio,$porcentajeCacao,$peso){
        $chocolate = new Chocolate($nombre,$numero,$precio,$porcentajeCacao,$peso);
        array_push($this->productos,$chocolate);
        $this->numProductos=$this->numProductos+1;
        return $this;
    }
    public function incluirCliente($nombre,$numero){
        $cliente = new Cliente($nombre,$numero);
        array_push($this->clientes,$cliente);
        $this->numClientes=$this->numClientes+1;
        return $this;
    }
    public function listarProductos(){
        echo "Número de productos: $this->numProductos <br>";
        $listadoProd =  [];
        foreach($this->productos as $p){
            array_push($listadoProd,$p->nombre);
        }
        foreach($listadoProd as $p){
            echo "<li> $p </li>";
        }
    }
    public function listarClientes(){
        echo "Número de clientes: $this->numClientes <br>";
        $listadoCli =  [];
        foreach($this->clientes as $c){
            array_push($listadoCli,$c->nombre);
        }
        foreach($listadoCli as $c){
            echo "<li> $c </li>";
        }
    }
    public function comprarClienteProducto($numeroCliente,$numeroDulce){
        $socio= false;
        $producto= false;
            foreach ($this->clientes as $cli) {
                if ($cli->getNumero() == $numeroCliente) {
                    $socio= true;
                    foreach ($this->productos as $dulce) {
                        if ($dulce->getNumero() == $numeroDulce) {
                            $producto = true;
                            $cli->comprar($dulce);
                            }
                        }
                }
            }
            if(!$producto){
                //throw new SoporteNoEncontradoException("<h3>Error: no existe ese soporte</h3>");
            }
            if(!$socio){
                //throw new ClienteNoEncontradoException("<h3 ->Error: socio no registrado</h3>");
            }
            return $this;
        }
    
}
    
?>