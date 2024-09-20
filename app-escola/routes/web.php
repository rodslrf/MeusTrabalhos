<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ExemploController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\PaginaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/carro', [CarroController::class, 'carro'])->name('carro.create');
Route::get('/carroEletrico', [ExemploController::class, 'CarroEletrico'])->name('carro.Carro-eletrico.php');
Route::get('/carroImplementado', [ExemploController::class, 'carroImplementado']);

Route::get('/casa', [ExemploController::class, 'casa']);

Route::get('/wishlist', [WishController::class, 'index'])->name('wishlist.index');
Route::get('/wishlist{id}', [WishController::class, 'show'])->name('wishlist.show');

Route::get('/eventoti', [PaginaController::class, 'inicial'])->name('paginas.inicial');
Route::get('/programaçãoeventoti', [PaginaController::class, 'programação'])->name('paginas.programação');
Route::get('/inscriçãoeventoti', [PaginaController::class, 'inscrição'])->name('paginas.inscrição');
Route::get('/palestranteseventoti', [PaginaController::class, 'palestrantes'])->name('paginas.palestrantes');
Route::get('/patrocinadoreseventoti', [PaginaController::class, 'patrocinadores'])->name('paginas.patrocinadores');
Route::get('/detalhesti', [PaginaController::class, 'detalhes'])->name('paginas.detalhes');