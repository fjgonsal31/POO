<?php

declare(strict_types=1);

require_once __DIR__ . '/figura.php';

class Circulo extends Figura
{
    private float $radio;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
        $this->calcularArea();
    }

    public function calcularArea(): void
    {
        $this->area = round(pi() * (pow($this->radio, 2)), 2);
    }
}
