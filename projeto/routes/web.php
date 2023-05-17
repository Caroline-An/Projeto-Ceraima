<?php

use App\Http\Controllers\Item\ItemController;
use App\Http\Controllers\Sistema\SistemaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Essa rota é a inicial, toda vez que startar o servidor ela vai ser chamada primeiro
    vamos utilizar só para controle, a princípio os links para as demais páginas serão
    postos nelas p q a gente possa acessar com facilidade, no futuro vamos trocar para 
    que ela sempre leve diretamente à tela de login*/
Route::get('/', function () { 
    return view('welcome');
});

Route::get('/login', [SistemaController::class, 'login']);

Route::get('/cadastro', [SistemaController::class, 'cadastro']);

Route::get('/home', [SistemaController::class, 'home']);

Route::get('/cadastroDeItens', [SistemaController::class, 'cadastroDeItens']);

Route::get('/bensCadastrados', [SistemaController::class, 'bensCadastrados']);

Route::get('/alterarInfoBem', [SistemaController::class, 'alterarInfoBem']);

Route::get('/excluirBem', [SistemaController::class, 'excluirBem']);


Route::get('/categorias', [SistemaController::class, 'categorias']);


Route::get('/reservarCateg', [SistemaController::class, 'reservarCateg']);

Route::get('/reservarItem', [SistemaController::class, 'reservarItem']);

Route::get('/formularioDeReserva', [SistemaController::class, 'formularioDeReserva']);

Route::get('/reservados', [SistemaController::class, 'reservados']);


Route::get('/perfil', [SistemaController::class, 'perfil']);
