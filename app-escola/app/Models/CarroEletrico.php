<?php

namespace App\Models;

class CarroEletrico extends Carro
{
    public $uvBateria;

    public function __construct($marca, $modelo, $ano, $uvBateria)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->uvBateria = $uvBateria;
    }

    public function obterDescricaos()
    {
        return parent::obterDescricao() . " Ele possui uma autonomia de bateria de $this->uvBateria km.";
    }
}
