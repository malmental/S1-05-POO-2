<?php

class rectangulo implements calcularArea
{
    protected float $largo;
    protected float $alto;

    public function __construct(float $largo, float $alto)
    {
        $this->largo = $largo;
        $this->alto = $alto;
    }

    public function calcularArea(): float
    {
        return $area = ($this->largo * $this->alto);
    }
}

?>