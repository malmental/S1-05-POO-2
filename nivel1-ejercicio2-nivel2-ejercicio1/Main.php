<?php

require_once 'figuraGeometrica.php';
require_once 'Rectangulo.php';
require_once 'Triangulo.php';
require_once 'Circulo.php';

$figura1 = new Rectangulo("Rectangulo", 10, 2);
$figura2 = new Triangulo("Triangulo", 10, 1.5);
$figura3 = new Circulo("Circulo", 7);

echo "El area de esta figura geometrica ".$figura1->getNombre() ." es: " . $figura1->calcularArea() . PHP_EOL;
echo "El area de esta figura geometrica ".$figura2->getNombre() ." es: " . $figura2->calcularArea() . PHP_EOL;
echo "El area de esta figura geometrica ".$figura3->getNombre() ." es: " . $figura3->calcularArea() . PHP_EOL;
