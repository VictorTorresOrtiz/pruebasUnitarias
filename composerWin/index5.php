<?php
include_once("Cliente.php");
include_once("Tarta.php");
$c1 = new Cliente("Javi", 1);
$tartaCumple=new Tarta("Feliz Cumpleaños",2,32,["Nata","Chocolate","Crema"],3,1,4);

$c1->comprar($tartaCumple);
$c1->listaDeDulces($tartaCumple);
echo ($c1->getNumPedidosEfectuados());
?>