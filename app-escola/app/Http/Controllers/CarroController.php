<?php

namespace App\Http\Controllers;

use App\Models\Carro;    
use Illuminate\Http\Request;

class CarroController extends Controller
{

public function carro()
{
    $meuCarro = new Carro('Toyota', 'Corolla', 2021);
    $meuCarro2 = new Carro('Fiat', '147', 1978);

    $descricao = $meuCarro->obterDescricao();
    $descricao400km = $meuCarro2->obterDescricao();

    return view('Produtos.create', compact('descricao', 'descricao400km'));
}
    

}