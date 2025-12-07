<?php

require_once 'claseAnimal.php';

class Perro extends Animal
{
    public function hablar(): string
    {
        // No se requirrá hacer un constructor porque los atributos los hereda de la clase padre Animal
        // Implementamo el metodo abstracto
        return "Guau guau como habla un perro";
    }
}

?>