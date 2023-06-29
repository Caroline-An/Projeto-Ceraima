<?php

namespace App\Http\Controllers\Sistema;

class SistemaController{

    public function login(){ return view('/login');}

    public function cadastro(){ return view('/cadastro');}

    public function home(){ return view('/home');}


    public function cadastroDeItens(){
        return view('itens/cadastroDeItens1');
    }

    public function bensCadastrados(){
        return view('itens/telaPatrimonios1');
    }

    public function alterarInfoBem(){
        return view('itens/alterarPatrimonio1');
    }

    public function excluirBem(){
        return view('itens/exluirIten1');
    }

    public function detalhesItens(){
        return view('itens/detalhesPatrimonios');
    }



    public function categorias()
    {
        return view('categorias/telaCategorias1');
    }


    public function reservarCateg(){
        return view('reservas/reservarPatrimonios');
    }

    public function reservarItem()
    {
        return view('reservas/reservarPatrimonios2');
    }

    public function formularioDeReserva()
    {
        return view('reservas/formularioReservar');
    }

    public function reservados()
    {
        return view('reservas/reservas1');
    }


    public function perfil()
    {
        return view('perfil');
    }

    public function mudar()
    {
        return view('reservas/mudar');
    }

  

}
?>