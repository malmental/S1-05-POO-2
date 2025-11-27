<?php

/* Necesitamos crear un tipo de datos que representen a un animal. Los animales tienen un nombre y "hablan" Hay que tener en cuenta, sin embargo, que no es el mismo sonido de los “habla” de un perro, que el de un gato, por ejemplo. Por tanto, necesitamos crear otros tipos de datos que nos ayuden a programar estos comportamientos entre diferentes animales. */

// Aqui declaramos una clase abstracta ya que será el 'molde'
abstract class Animal 
{
    // Encapsulamiento de propiedad para que no se pueda acceder desde fuera.
    // NOTA para mi, cuando es 'private' UNICMENTE puede ser visto por la misma clase
    // Y 'protected', solamente puede ver lo atributos, la clase y quien le hereda
    protected string $nombre;

    // Metodo constructor para entregarle un nombre ala instacia de la clase Animal
    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;   
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    // Metodo abstracto para 'habla' que obligará a las clases hija a ser llamado y se especifica la salida string.
    abstract public function hablar(): string;
}

class Perro extends Animal 
{
    public function hablar(): string
    {
        // No se requirrá hacer un constructor porque los atributos los hereda de la clase padre Animal
        // Implementamo el metodo abstracto
        return "Guau guau como habla un perro";
    }
}

class Gato extends Animal
{
    public function hablar(): string
    {
        return "Miau miau como habla un Gato";
    }
}

// Ejemplos de verificacion, crearemos tres animales y veremos como hablan utilizando un metodo definido como polimorfico; crearemos un array indexado de animales
$animales = [
    new Perro ('Firulais y sus trampas'),
    new Gato ('Salem del caldero'),
    new Perro ('Patán de las carreras locas'),
];

echo "A escuchar como hablan esos animales: ".PHP_EOL;
foreach ($animales as $animal) {
    echo $animal->getNombre()." te dice: ".$animal->hablar().PHP_EOL;
}

// RECORDAR: Se deberá utilizar PHP_EOL para salto de linea asegurando compatilidad entre sistemas operativos, solucion más robusta.

?> 