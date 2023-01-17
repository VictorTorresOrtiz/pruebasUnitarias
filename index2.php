<?php
include "app/Dulces.php";
include "app/Bollo.php";
$nuevoBollo = new Bollo("CacaoConBugs", 90, 30, true);

echo "<strong>" . $nuevoBollo -> nombre . "</strong>";
echo "<br>Número: " . $nuevoBollo -> getNumero(); 
echo "<br>Precio: " . $nuevoBollo -> getPrecio() . " euros"; 
echo "<br>Precio con IVA: " . $nuevoBollo -> getPrecioConIVA() . " euros";
echo "<br>Relleno: " . $nuevoBollo -> getRelleno() . "<br>";

$nuevoBollo -> muestraResumen();