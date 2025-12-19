<?php

include ('calcularArea.php');
include ('circulo.php');
include ('rectangulo.php');
include ('triangulo.php');


$circulo = new Circulo(2.8);
$rectangulo = new Rectangulo(4, 2.4);
$triangulo = new Triangulo(3, 3.5);

echo "el area de: " . $circulo->calcularArea() . PHP_EOL;
echo "el area de: " . $rectangulo->calcularArea() . PHP_EOL;
echo "el area de: " . $circulo->calcularArea() . PHP_EOL;