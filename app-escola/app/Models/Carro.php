<?php

use App\Http\Controllers\CarroController;
namespace App\Models;
class Carro
{
   public $marca;       public $modelo;      public $ano;

   public function __construct($marca, $modelo, $ano)
   {
    $this->marca = $marca;
    $this->modelo=  $modelo;
    $this->ano= $ano;
   }

   public function obterDescricao()
   {
    return "Este é um $this->marca da marca $this->modelo, ano $this->ano.";
   }
}