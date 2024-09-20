<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicial()
    {
        return view('paginas.inicial');
    }

    public function programação()
    {
        return view('paginas.programação');
    }

    public function palestrantes()
    {
        return view('paginas.palestrantes');
    }

    private $inscrição;
    private $patrocinios;

    public function __construct()
    {
        $this->inscrição = [
            1 => ['nome' => 'João', 'contato' => 37983278346],
            2 => ['nome' => 'Lucia', 'contato' => 36924275376],
        ];
        $this->patrocinios = [
           1=> ['empresa' => 'Google','site' => 'https://www.google.com','logo' => 'path/to/google-logo.png'],
           2=> ['empresa' => 'Microsoft','site' => 'https://www.microsoft.com','logo' => 'path/to/microsoft-logo.png']
        ];
    }

    public function inscrição()
    {
        return view('paginas.inscrição', ['inscrição' => $this->inscrição]);
    }

    public function patrocinadores()
    {
        return view('paginas.patrocinadores', ['patrocinios' => $this->patrocinios]);
    }
    public function detalhes()
    {
        return view('paginas.detalhes');
    }
}
