<?php
include_once("Pasteleria.php");
include_once("Cliente.php");
include_once("Tarta.php");
$pasteleriaNueva = new Pasteleria("PasteleriaLosPollos");
$clienteNuevo = new Cliente("Javi", 1);
$tarta=new Tarta("tarta",2,32,["Nata","Chocolate","Crema"],3,1,4);

$pasteleriaNueva->comprarClienteProducto(14567, 2);

// $clienteNuevo->comprar($tartaCumple);
// $clienteNuevo->listaDeDulces($tartaCumple);
// echo ($clienteNuevo->getNumPedidosEfectuados());
?>