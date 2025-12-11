<?php

require_once 'Rectangulo.php';
require_once 'Triangulo.php';
require_once 'Circulo.php';

$figura1 = new Rectangulo(10, 2);
$figura2 = new Triangulo(10, 1.5);
$figura3 = new Circulo(7);

echo "El area del rectangulo es: " . $figura1->calcularArea() . PHP_EOL;
echo "El area del triangulo es: " . $figura2->calcularArea() . PHP_EOL;
echo "El area del circulo es: " . $figura3->calcularArea() . PHP_EOL;

?>
