<?php

class triangulo implements calcularArea
{
    protected float $base;
    protected float $altura;

    public function __construct(float $base, float $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(): float
    {
        return $area = ($this->base * $this->altura) / 2;
    }
}

?>