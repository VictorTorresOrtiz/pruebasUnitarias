<?php

include_once './composerWin/Pasteleria.php';
include_once './composerWin/Cliente.php';
include_once './composerWin/vendor/autoload.php';

$cliente1 = new Cliente("Javi", 1);
$tartaCumple=new Tarta("Feliz Cumpleaños",2,32,["Nata","Chocolate","Crema"],3,1,4);

$cliente1->comprar($tartaCumple);
$cliente1->listaDeDulces($tartaCumple);
echo ($cliente1->getNumPedidosEfectuados());
?>