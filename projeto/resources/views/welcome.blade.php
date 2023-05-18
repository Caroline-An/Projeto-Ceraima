@extends('layouts.main')

@section('title', 'Tela de base')

@section('cabecalho')
<!--Na tela de login e de cadastro o cabeçalho deve ter só o nome do sistema-->
@endsection('cabecalho')

@section('content')

<div class="container mt-4 d-flex">
    <div class="col">
        <a class="btn btn-lg btn-success m-2" href="login">Tela de Login</button>
        <a class="btn btn-lg btn-success m-2" href="cadastro">Tela de Cadastro</button>
        <a class="btn btn-lg btn-success m-2" href="home">Tela Inicial</button>
        <a class="btn btn-lg btn-success m-2" href="cadastroDeItens">Tela de Cadastro de Itens</button>
        <a class="btn btn-lg btn-success m-2" href="categorias">Tela de Categorias</button>
        <a class="btn btn-lg btn-success m-2" href="bensCadastrados">Tela de Visualização de Bens Cadastrados</button>
        <a class="btn btn-lg btn-success m-2" href="alterarInfoBem">Tela de Alterar informações dos Bens</button>
        <a class="btn btn-lg btn-success m-2" href="excluirBem">Tela de Exclusão dos Bens/button>
        <a class="btn btn-lg btn-success m-2" href="reservarCateg">Tela de Reservas Categorias</button>
        <a class="btn btn-lg btn-success m-2" href="reservarItem">Tela de Reservas Bens</button>
        <a class="btn btn-lg btn-success m-2" href="formularioDeReserva">Formulário de Reservas</button>
        <a class="btn btn-lg btn-success m-2" href="reservados">Tela de Itens reservados</button>
        <a class="btn btn-lg btn-success m-2" href="perfil">Tela de Perfil</button>    
    </div>

</div>

@endsection