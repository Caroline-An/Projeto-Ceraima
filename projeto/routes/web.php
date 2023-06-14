<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController; 
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PrevisaoEntregarController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\TesteController;

use App\Http\Controllers\Baixa_PatrimonialController;
use App\Http\Controllers\BemexcedenteController;
use App\Http\Controllers\DesaparecidoController;
use App\Http\Controllers\DevolucaoController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ItensdevolucaoController;
use App\Http\Controllers\ItensentradaController;
use App\Http\Controllers\ItenssaidaController;
use App\Http\Controllers\ManutencaoController;
use App\Http\Controllers\Patrimonio_InservivelController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SaidaController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\Item\ItemController;
use App\Http\Controllers\PatrimonioController;
use App\Http\Controllers\Sistema\SistemaController;

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
Route::get('/', [SistemaController::class, 'login']) -> name('user.login');

Route::get('/login', [SistemaController::class, 'login']) -> name('user.login');

Route::get('/cadastro', [SistemaController::class, 'cadastro']) -> name('user.cadastro');

Route::get('/home', [SistemaController::class, 'home']) -> name('sistema.home');

Route::get('/cadastroDeItens', [SistemaController::class, 'cadastroDeItens']) -> name('item.create');

Route::get('/bensCadastrados', [SistemaController::class, 'bensCadastrados']) -> name('item.show');

Route::get('/alterarInfoBem', [SistemaController::class, 'alterarInfoBem']) -> name('item.alter');

Route::get('/excluirBem', [SistemaController::class, 'excluirBem']) -> name('item.delete');

Route::get('/categorias', [SistemaController::class, 'categorias']) -> name('item.categ');

Route::get('/detalhes', [SistemaController::class, 'detalhesItens']) -> name('item.detalhes');


Route::get('/reservarCateg', [SistemaController::class, 'reservarCateg']) -> name('reserva.categ');

Route::get('/reservarItem', [SistemaController::class, 'reservarItem']) -> name('reserva.item');

Route::get('/formularioDeReserva', [SistemaController::class, 'formularioDeReserva']) -> name('reserva.create');

Route::get('/reservados', [SistemaController::class, 'reservados']) -> name('reserva.show');


Route::get('/perfil', [SistemaController::class, 'perfil']) -> name('user.profile');
