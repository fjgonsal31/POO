<?php

declare(strict_types=1);

class CuentaBancaria
{

    private int $saldo;

    public function __construct(int $saldo)
    {
        $this->saldo = $saldo;
    }

    public function depositar(int $cantidad): bool
    {
        if ($cantidad > 0) {
            $this->saldo += $cantidad;
            return true;
        }

        return false;
    }

    public function retirar(int $cantidad): bool
    {
        if ($cantidad > 0 && $cantidad < $this->saldo) {
            $this->saldo -= $cantidad;
            return true;
        }

        return false;
    }

    public function obtenerSaldo(): int
    {

        return $this->saldo;
    }
}
