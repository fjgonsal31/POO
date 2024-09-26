<?php

declare(strict_types=1);

class ConvertidorMoneda
{

    private static float $tasaDolarEuro = 0.85;
    private static float $tasaEuroDolar = 1.18;

    public static function dolaresaEuros(float $dolares): float
    {

        return $dolares * self::$tasaDolarEuro;
    }

    public static function eurosaDolares(float $euros): float
    {

        return $euros * self::$tasaEuroDolar;
    }

    public static function actualizarTasas(float $nuevaTasaDolar, float $nuevaTasaEuro): void
    {

        self::$tasaDolarEuro = $nuevaTasaDolar;
        self::$tasaEuroDolar = $nuevaTasaEuro;
    }

    public static function obtenerTasasActuales(): array
    {
        $array = [self::$tasaDolarEuro, self::$tasaEuroDolar];
        return $array;
    }
}
