<?php

declare(strict_types=1);

interface Reproducible
{
    public function reproducir(): void;
    public function pausar(): void;
    public function detener(): void;
}

class Cancion implements Reproducible
{
    private string $titulo;

    public function reproducir(): void {}
    public function pausar(): void {}
    public function detener(): void {}
}

class Video implements Reproducible
{
    private string $titulo;

    public function reproducir(): void {}
    public function pausar(): void {}
    public function detener(): void {}
}
