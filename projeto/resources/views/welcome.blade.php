@extends('layouts.main')

@section('title', 'Tela de base')

@section('cabecalho')
<!--Na tela de login e de cadastro o cabeçalho deve ter só o nome do sistema-->
@endsection('cabecalho')

@section('content')

<div class="container mt-4">
    <a class="btn btn-lg btn-success" href="login">Tela de Login</button>
</div>

@endsection