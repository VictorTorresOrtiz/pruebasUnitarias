<?php

include "app/Dulces.php";
$dulce1 = new Dulces("Donut", 7, 2);

echo  $dulce1 -> nombre;
echo "<br>Número: " . $dulce1 -> getNumero(); 
echo "<br>Precio: " . $dulce1 -> getPrecio() . " euros"; 
echo "<br>Precio con IVA: " . $dulce1 -> getPrecioConIVA() . " euros<br>";

$dulce1 -> muestraResumen();
?>