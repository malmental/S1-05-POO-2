<?php

abstract class figuraGeometrica
{
    protected string $nombre;
    protected float $base;
    protected float $altura;

    public function __construct(string $nombre, float $base, float $altura)
    {
        $this->nombre = $nombre;
        $this->base = $base;
        $this->altura = $altura;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    abstract public function calcularArea(): float;
}

?>