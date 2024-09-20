<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\CarroEletrico;
use App\Models\CarroImplementado;
use App\Models\Casa;

class ExemploController extends Controller
{
    public function casa()
    {
        $casa = new casa();
        $casa->endereco = 'Rua 51 102 34';
        $casa->proprietario = 'José';
        $casa->cor = 'verde';
        $casa->tipo = 'predio';
        $casa->string = 'Olá, mundo, o Hitler é gay';
        return view('partials.casa', compact('casa'));
    }

    public function carroImplementado()
    {
        $carro= new CarroImplementado('ford','mustang',2023);
        $estado = $carro->verificarEstado();
        $ligar = $carro->ligar();

        $desligar = $carro->desligar();

        return view('partials.carro-implementado', compact('ligar','estado','desligar'));

    }
    public function carroEletrico()
    {
        $meuCarroEletrico = new CarroEletrico('tesla','model s', 2022, 600);
        $descricao= $meuCarroEletrico->obterDescricao();
        $descricaos = $meuCarroEletrico->obterdescricaos();

        return view('partials.carro-eletrico', compact('descricao','descricaos'));
    }
    public function carro()
    {
        $meuCarro = new Carro('Toyota','Corolla',2021);
        $outroCarro = new Carro('Monza','Velho?',2001);

        ($meuCarro);
        $descricao = $meuCarro->obterDescricao();
        $descricaoFiat = $outroCarro->obterDescricao();

        return view('carro', compact('descricao', 'descricaoFiat'));
    }
    public function teste()
    {
        return view('welcome');
    }
    public function fundamentos()
    {
        $soma = 2+2;
        $inteiro = 10;
        $flutuante = 20.5;
        $string = "Olá, mundo, o Hitler é gay";
        $booleano = true;

        $soma = $inteiro + $flutuante;
        $multiplicacao =$inteiro * 2;

        $maior = $inteiro > $flutuante;
        $igual = $inteiro == 10;
        $e = $booleano && ($inteiro < 20);

        $mensagem = '';
        if($maior){
            $mensagem = "Inteiro é maior que Flutuante";
        }else{
            $mensagem = "Inteiro não é maior que Flutuante";
            }
        
    $contador = 0;
    $valores = [];
    while ($contador < 50){
        $valores[] = $contador;
        $contador = $contador * $contador +1;
    }
    return view(
        'fundamentos', compact('soma', 'multiplicacao', 'mensagem', 'valores'));
}
}