<?php

require_once 'figuraGeometrica.php';

class Circulo extends figuraGeometrica 
{
    private float $radio;

    public function __construct(string $nombre, float $radio)
    {
        $this->nombre = $nombre;
        $this->radio = $radio;
    }

    public function calcularArea(): float 
    {
        return round(pi() * pow($this->radio, 2), 2);
    }
}