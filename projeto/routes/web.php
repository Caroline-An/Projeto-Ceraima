<?php

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
Route::get('/', function () { return view('welcome');});

Route::get('/login', function () { return view('login');});

Route::get('/cadastro', function () { return view('cadastro');});

Route::get('/alterarPatrimonio', function () { return view('alterarPatrimonio1');});

Route::get('/cadastrarItem', function () { return view('cadastroDeItens1');});

Route::get('/categorias', function () { return view('telaCategorias1');});

Route::get('/excluir', function () { return view('excluirIten1');});

Route::get('/home', function () { return view('home');});

Route::get('/patrimonios', function () { return view('telaPatrimonios1');});

Route::get('/perfil', function () { return view('perfil');});

Route::get('/reservar', function () { return view('reservarPatrimonios');});

Route::get('/reservar2', function () { return view('reservarPatrimonios2');});

Route::get('/reservados', function () { return view('reservas1');});
