<?php
include_once './composerWin/vendor/autoload.php';
include_once './composerWin/Bollo.php';

$bollo = new Bollo("Bollo",2,32,"Nata");
$bollo->muestraResumen();
?>