<?php
namespace App\Interfaces;

interface Veiculo
{
    /**
     * Ligar o veículo.
     *
     * @return string
     */
    public function ligar();

    /**
     * Desligar o veículo.
     *
     * @return string
     */
    public function desligar();
}
