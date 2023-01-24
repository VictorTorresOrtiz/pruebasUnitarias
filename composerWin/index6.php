<?php



include_once("vendor/autoload.php");
use Pasteleria;

//Ya no podemos instanciar un Dulce por la clase abstracta
$pasteleriaNueva = new Pasteleria("PasteleriaLosPollos");
$clienteNuevo = new Cliente("Javi", 1);
$tarta=new Tarta("tarta",2,32,["Nata","Chocolate","Crema"],3,1,4);

$pasteleriaNueva->comprarClienteProducto(14567, 2);

?>