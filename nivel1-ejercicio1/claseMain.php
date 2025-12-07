<?php

require_once 'claseAnimal.php';
require_once 'clasePerro.php';
require_once 'claseGato.php';

$animales = [
    new Perro('Firulais y sus trampas'),
    new Gato('Salem del caldero'),
    new Perro('Patán de las carreras locas'),
];

echo "A escuchar como hablan esos animales: " . PHP_EOL;
foreach ($animales as $animal) {
    echo $animal->getNombre() . " te dice: " . $animal->hablar() . PHP_EOL;
}

?>