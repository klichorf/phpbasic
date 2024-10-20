<?php

// Hallar el área de la circunferencia
define("pi", 3.1416);
$radio = 8.0;
$area = pi * ($radio ** 2);

echo "El área del círculo es: " . $area ."<br>";

// Realizar un programa con 3 precios correspondientes a 3 camisas y
// calcular el precio total por las 3 aplicando un 20% descuento, mostrar el
// neto a pagar

$precio1 = 10000;
$precio2 = 15000;
$precio3 = 20000;

$precio_total = $precio1 + $precio2 + $precio3;
$precio_total_descuento = $precio_total * 0.20;

echo "El precio total de las camisas es de: " . $precio_total . "<br>";
echo "El precio con descuento es: " . $precio_total_descuento;
?>
