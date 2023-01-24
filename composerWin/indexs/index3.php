<?php
include_once './composerWin/vendor/autoload.php';
include_once './composerWin/Chocolate.php';

$chocolat=new Chocolate("KitKat",2,32,54,310);
$chocolat->muestraResumen();
?>