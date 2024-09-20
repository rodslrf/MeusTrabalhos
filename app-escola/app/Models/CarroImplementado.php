<?php

namespace App\Models;

use App\Interfaces\Veiculo;

class CarroImplementado extends Carro Implements Veiculo
{
    private $ligado = false;
    public function ligar()
    {
        $this->ligado = true;
        return "Carro ligado";
    }
    public function desligar()
    {
        $this->ligado = false;
        return "Carro desligado";
    }
    public function verificarEstado()
    {
        return $this->ligado ? "carro está ligado" : "Carro está desligado";
    }
}