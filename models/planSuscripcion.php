<?php

declare(strict_types=1);

class PlanSuscripcion
{
    public const PLAN_BASICO = 'basico';
    public const PLAN_ESTANDAR = 'estandar';
    public const PLAN_PREMIUM = 'premium';

    private const PRECIO_BASICO = 9.99;
    private const PRECIO_ESTANDAR = 14.99;
    private const PRECIO_PREMIUM = 19.99;

    private string $plan_actual;

    public function __construct(string $plan)
    {
        $planes = [self::PLAN_BASICO, self::PLAN_ESTANDAR, self::PLAN_PREMIUM];

        if (in_array($plan, $planes)) {
            $this->plan_actual = $plan;
        }
    }

    public function obtenerPrecio(): float
    {
        switch ($this->plan_actual) {
            case self::PLAN_BASICO:
                return self::PRECIO_BASICO;
            case self::PLAN_ESTANDAR:
                return self::PRECIO_ESTANDAR;
            case self::PLAN_PREMIUM:
                return self::PRECIO_PREMIUM;
        }
    }

    public static function obtenerPlanesPrecios(): array
    {
        $resultado = [
            self::PLAN_BASICO => self::PRECIO_BASICO,
            self::PLAN_ESTANDAR => self::PRECIO_ESTANDAR,
            self::PLAN_PREMIUM => self::PRECIO_PREMIUM
        ];


        return $resultado;
    }
}
