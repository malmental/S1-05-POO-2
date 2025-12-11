<?php

require_once 'claseAnimal.php';

class Perro extends Animal
{
    public function hablar(): string
    {
        return "Guau guau como habla un perro";
    }
}

?>