<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function naosei()
    {
        return "nome:". $this->nome;
    }

    public function naosei2()
    {
        return "nome:". $this->nome;
    }
}