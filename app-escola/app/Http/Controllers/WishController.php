<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishController extends Controller
{
    private $produtos;

    public function __construct()
    {
        $this->produtos = [
            1 => ['nome' => 'morango'],
            2 => ['nome' => 'maracuja']
        ];
    }
    
    public function index()
    {
        return view('wishlist.index', ['produtos' => $this->produtos]);
    }

    public function show($id)
    {
        $produto = $this->produtos[$id];
        return view('wishlist.show', ['produto' => $produto]);
    }
}