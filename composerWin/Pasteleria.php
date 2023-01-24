<?php

include_once("vendor/autoload.php");
include_once("./composerWin/util/LogFactory.php");
include_once '../util/ClienteNoEncontradoException.php';
include_once '../util/DulceNoEncontradoException.php.php';

use src\util\LogFactory;
use Monolog\Logger;

class Pasteleria {
    public string $nombre;
    private array $productos = [];
    private int $numProductos;
    private array $clientes = [];
    private int $numClientes;

    private Logger $log;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->log = LogFactory::getLogger();
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getProductos()
    {
        return $this->productos;
    }

    public function setProductos($productos)
    {
        $this->productos = $productos;

        return $this;
    }

    public function getClientes()
    {
        return $this->clientes;
    }

    public function setClientes($clientes)
    {
        $this->clientes = $clientes;

        return $this;
    }
 
    private function incluirProducto(Dulces $producto) {
        if (in_array($producto, $this->productos)) {
            echo "Este producto ya existe.";
        } else {
            $this->productos[$this->numProductos] = $producto;
            echo "Producto Incluido " . $this->numProductos + 1; 
            $this->numProductos++;
        }

    }

    public function incluirTarta($nombre, $numero, $precio, $numPisos, $rellenos, $minC, $maxC) {
        $tarta = new Tarta($nombre, $numero, $precio, $numPisos, $rellenos, $minC, $maxC);
        $this->incluirProducto($tarta);
    }

    public function incluirBollo($nombre, $numero, $precio, $rellenos) {
        $bollo = new Bollo($nombre, $numero, $precio, $rellenos);
        $this->incluirProducto($bollo);
    }

    public function incluirChocolate($nombre, $numero, $precio, $porcentajeCacao, $peso) {
        $chocolate = new Chocolate($nombre, $numero, $precio, $porcentajeCacao, $peso);
        $this->incluirProducto($chocolate);
    }

    public function incluirCliente($nombre, $numero) {
        $cliente = new Cliente($nombre, $numero);
        
        if (in_array($cliente, $this->clientes)) {
            echo "Este cliente ya existe";
        } else {
            $this->clientes[$this->numClientes] = $cliente;
            echo "Cliente añadido " . $this->numClientes + 1;
            $this->numClientes++;
        }
    
    }

    public function listarProductos() {
        echo "<p>Listado de   productos disponibles:" . $this->numProductos; 
        if ($this->numProductos == 0) {
            echo"<br>No hay stock";
        } else {
            for ($i=0;$i<$this->numProductos;$i++){ 
                echo "<br><br>"; 
                $this->getProductos()[$i]->muestraResumen(); 
            } 
        }
    }

    public function listarClientes() {
        echo "<p>Listado de los  socios del videoclub:" .$this->numClientes; 
        if ($this->numClientes == 0) {
            echo"<br>No existen clientes registrados";
        } else {
            for ($i=0;$i<$this->numClientes;$i++){ 
                echo "<br><br>"; 
                $this->getClientes()[$i]->muestraResumen(); 
            } 
        }
    }

    public function comprarClienteProducto($numeroCliente, $numeroDulce)
    {
        $existeDulce = false;
        $clienteExiste = false;
        try {
            foreach ($this->getClientes() as $cliente) {
                if ($cliente->getNumero() == $numeroCliente) {
                    $c = $cliente;
                    $clienteExiste = true;
                }
            }
            if (!$clienteExiste) {
                $this->log->error("Cliente no encontrado", [$numeroCliente]);
                throw new ClienteNoEncontradoException("<p>Cliente no encontrado</p>");
            }
            foreach ($this->getProductos() as $dulce) {
                if ($dulce->getNumero() == $numeroDulce) {
                    $p = $dulce;
                    $existeDulce = true;
                    //Una vez encontrados ambos, realizamos la acción de comprar
                    if ($c->comprar($p)) {
                        $this->log->alert("Se ha realizado la compra", [$numeroCliente, $numeroDulce]);
                        echo "<p>Se ha realizado la compra</p>";
                    } else {
                        echo "<p>Error en la compra</p>";
                    }
                }
            }
            if (!$existeDulce) {
                $this->log->warning("Dulce no encontrado", [$numeroDulce]);
                throw new DulceNoEncontradoException("<p>Dulce no encontrado</p>");
            }
        } catch (DulceNoEncontradoException $e) {
            echo $e->getMessage();
        } catch (ClienteNoEncontradoException $e) {
            echo $e->getMessage();
        }
    } 
    


    public function muestraResumen():void
    {
        echo '<b>Resumen pastelería:</b><br>********************<br>' . '<b>Nombre = </b>' . $this->nombre .
            '<br><b>Número de productos que hay en la pastelería = </b>' . $this->numProductos .
            '<br><b>Número de clientes que hay en la pastelería = </b>' . $this->numClientes .
            '<br><br><b>Productos de la pastelería:</b><br>-----------------------<br>';
            for ($i = 0; $i < $this->numProductos; $i++) {
            echo '<br><br>' . $this->getProductos()[$i]->muestraResumen();
        }
        '<br><b>Número de clientes que hay en la pastelería = </b>' . $this->numClientes .
        '<br><br>Productos de la pastelería:<br>-----------------------<br>';
        for ($i = 0; $i < $this->numClientes; $i++) {
            echo '<br><br>' . $this->getClientes()[$i]->muestraResumen();
        }
    }
}
    
?>