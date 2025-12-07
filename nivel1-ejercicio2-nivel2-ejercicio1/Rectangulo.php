<?php

require_once 'figuraGeometrica.php';

class Rectangulo extends figuraGeometrica
{
    public function calcularArea(): float
    {
        return $this->base * $this->altura;
    }
}

?>