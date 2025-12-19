<?php

class Circulo implements calcularArea
{
    protected float $radio;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    public function calcularArea(): float
    {
        return round(pi() * pow($this->radio, 2), 3);
    }
}

?>