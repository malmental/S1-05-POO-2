<?php

require_once 'figuraGeometrica.php';

class Triangulo extends figuraGeometrica
{
    private float $altura;
    private float $base;

    public function __construct(float $altura, float $base)
    {
        $this->altura = $altura;
        $this->base = $base;
    }
    
    public function calcularArea(): float
    {
        return ($this->altura * $this->base) / 2;
    }
}

?>