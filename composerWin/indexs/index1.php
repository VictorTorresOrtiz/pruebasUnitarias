<?php
include_once './composerWin/vendor/autoload.php';
include_once './composerWin/Dulces.php';

//Clase Abstracta

$donete=new Dulces("Donete",2,32);
$donete->muestraResumen();

?>