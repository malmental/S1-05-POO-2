<?php

require_once 'claseAnimal.php';

class Gato extends Animal
{
    public function hablar(): string
    {
        return "Miau miau como habla un Gato";
    }
}

?>