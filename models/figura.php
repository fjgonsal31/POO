<?php

declare(strict_types=1);

abstract class Figura
{
    protected float $area;

    abstract public function calcularArea(): void;

    public function mostrarArea(): string
    {

        return 'Area = ' . strval($this->area) . ' cm2';
    }
}
