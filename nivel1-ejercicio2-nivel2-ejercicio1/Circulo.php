<?php

require_once 'figuraGeometrica.php';

class Circulo extends figuraGeometrica 
{
    private float $radio;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    public function getRadio(): float
    {
        return $this->radio;
    }

    public function calcularArea(): float 
    {
        return round(pi() * pow($this->radio, 2), 2);
    }
}