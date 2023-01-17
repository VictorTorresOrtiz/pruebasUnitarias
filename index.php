<?php

include "app/Dulces.php";
$dulce1 = new Dulce("Donut", 7, 2);

echo "<strong>" . $dulce1 -> nombre . "</strong>";
echo "<br>Número: " . $dulce1 -> getNumero(); 
echo "<br>Precio: " . $dulce1 -> getPrecio() . " euros"; 
echo "<br>Precio con IVA: " . $dulce1 -> getPrecioConIVA() . " euros<br>";

$dulce1 -> muestraResumen();
?>