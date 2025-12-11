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

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function getBase(): float
    {
        return $this->base;
    }
    
    public function calcularArea(): float
    {
        return ($this->altura * $this->base) / 2;
    }
}

?>