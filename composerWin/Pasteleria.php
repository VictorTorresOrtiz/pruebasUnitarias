<?php 
use Monolog\Logger;
use util\LogFactory;
use util\ClienteNoEncontradoException;
use util\DulceNoEncontradoException;

include_once "Cliente.php";
include_once "Tarta.php";
include_once "Bollo.php";
include_once "Chocolate.php";
include_once('./util/LogFactory.php');
    
    /**
     * Pasteleria
     */
    class Pasteleria{    
    /**
     * nombre
     *
     * @var mixed
     */
    private $nombre;    
    /**
     * productos
     *
     * @var array
     */
    private $productos = [];    
    /**
     * numProductos
     *
     * @var mixed
     */
    private $numProductos;    
    /**
     * clientes
     *
     * @var array
     */
    private $clientes = array();    
    /**
     * numClientes
     *
     * @var mixed
     */
    private $numClientes;

    private Logger $log;     
    /**
     * __construct
     *
     * @param  mixed $nombre
     * @return void
     */
    public function __construct($nombre)
    {
        $this->$nombre=$nombre;
        $this->log = LogFactory::getLogger();
    }
        
    /**
     * getNombre
     *
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }    
    /**
     * setNombre
     *
     * @param  mixed $nombre
     * @return void
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }    
    /**
     * getNumProductos
     *
     * @return void
     */
    public function getNumProductos()
    {
        return count($this->productos);
    }
    
    /**
     * getNumClientes
     *
     * @return void
     */
    public function getNumClientes()
    {
        return count($this->clientes);
    }

    
    /**
     * incluirProducto
     *
     * @param  mixed $dulce
     * @return void
     */
    private function incluirProducto(Dulces $dulce){
        array_push($this->productos,$dulce);
        $this->numProductos=$this->numProductos+1;

    }    
    /**
     * incluirTarta
     *
     * @param  mixed $nombre
     * @param  mixed $numero
     * @param  mixed $precio
     * @param  mixed $numPisos
     * @param  mixed $rellenos
     * @param  mixed $minC
     * @param  mixed $maxC
     * @return void
     */
    public function incluirTarta($nombre,$numero,$precio,$numPisos,$rellenos,$minC,$maxC){
        $tarta = new Tarta($nombre,$numero,$precio,$numPisos, $rellenos, $minC, $maxC);
        $this->incluirProducto($tarta);
        $this->numProductos=$this->numProductos+1;
        return $this;
    }    
    /**
     * incluirBollo
     *
     * @param  mixed $nombre
     * @param  mixed $numero
     * @param  mixed $precio
     * @param  mixed $relleno
     * @return void
     */
    public function incluirBollo($nombre,$numero,$precio,$relleno){
        $bollo = new Bollo($nombre,$numero,$precio,$relleno);
        $this->incluirProducto($bollo);
        $this->numProductos=$this->numProductos+1;
        
    }    
    /**
     * incluirChocolate
     *
     * @param  mixed $nombre
     * @param  mixed $numero
     * @param  mixed $precio
     * @param  mixed $porcentajeCacao
     * @param  mixed $peso
     * @return void
     */
    public function incluirChocolate($nombre,$numero,$precio,$porcentajeCacao,$peso){
        $chocolate = new Chocolate($nombre,$numero,$precio,$porcentajeCacao,$peso);
        $this->incluirProducto($chocolate);
        $this->numProductos=$this->numProductos+1;
        
    }    
    /**
     * incluirCliente
     *
     * @param  mixed $nombre
     * @param  mixed $numero
     * @return void
     */
    public function incluirCliente($nombre,$numero){
        $cliente = new Cliente($nombre,$numero);
        array_push($this->clientes,$cliente);
        $this->numClientes=$this->numClientes+1;
       
    }    
    /**
     * listarProductos
     *
     * @return void
     */
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
    /**
     * listarClientes
     *
     * @return void
     */
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
    /**
     * comprarClienteProducto
     *
     * @param  mixed $numeroCliente
     * @param  mixed $numeroDulce
     * @return void
     */
    public function comprarClienteProducto($numeroCliente,$numeroDulce){
        $socio= false;
        $producto= false;
        try {
            foreach ($this->clientes as $cli) {
                if ($cli->getNumero() == $numeroCliente) {
                    $socio = true;
                    foreach ($this->productos as $dulce) {
                        if ($dulce->getNumero() == $numeroDulce) {
                            $producto = true;
                            $cli->comprar($dulce);
                        }
                    }
                }
            }
            if (!$producto) {
                $this->log->critical("El dulce no se encuentra", [$producto]);
                throw new DulceNoEncontradoException("<h3>Error: no existe ese dulce</h3>");
            }
            if (!$socio) {
                $this->log->warning("El socio no se encuentra", [$socio]);
                throw new ClienteNoEncontradoException("<h3 ->Error: socio no registrado</h3>");
            }
        }catch (DulceNoEncontradoException $e){
            echo $e->getMessage();
        }catch (ClienteNoEncontradoException $e){
            echo $e->getMessage();
        }

    }
    
}
    
?>