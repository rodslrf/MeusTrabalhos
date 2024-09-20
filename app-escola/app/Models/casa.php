<?php

use App\Http\Controllers\ExemploController;
namespace App\Models;
class Casa
{
    public function casa()
    {
        $casa = new casa();
        $casa->endereco = 'Rua 51 102 34';
        $casa->proprietario = 'José';
        $casa->cor = 'verde';
        $casa->tipo = 'predio';
        $casa->string = 'olá mundo, hitler é gay';
        return view('casa', compact('casa'));
    }

}