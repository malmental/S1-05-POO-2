<?php 
/*Escriba un programa que defina una clase Shape con un constructor que reciba el ancho y los parámetros altos. Defina dos subclases; Triángulo y Rectángulo que heredan de Forma y calculan el área de la figura respectivamente (Este ejercicio ya fue resuelto en S1-04-CACA1-Ejercicio2 pero ahora refactizaremos el codigo con el enfoque POO)*/

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

class Rectangulo extends figuraGeometrica
{
    public function calcularArea(): float
    {
        return $this->base * $this->altura;
    }
}

class Triangulo extends figuraGeometrica
{
    public function calcularArea(): float
    {
        return ($this->altura * $this->base) / 2;
    }
}

// Ejemplos de verificacion. Creamos un rectangulo y un triangulo
$figura1 = new Rectangulo("Rectangulo", 10, 2);
$figura2 = new Triangulo ("Triangulo", 10, 1.5);
echo "El area de esta figura geometrica ".$figura1->getNombre()." es: ".$figura1->calcularArea().PHP_EOL;
echo "El area de esta figura geometrica ".$figura2->getNombre()." es: ".$figura2->calcularArea().PHP_EOL;

?>