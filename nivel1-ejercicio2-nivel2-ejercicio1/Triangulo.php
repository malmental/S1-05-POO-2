<?php

require_once 'figuraGeometrica.php';

class Triangulo extends figuraGeometrica
{
    public function calcularArea(): float
    {
        return ($this->altura * $this->base) / 2;
    }
}

?>