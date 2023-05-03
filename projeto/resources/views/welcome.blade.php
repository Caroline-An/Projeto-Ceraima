@extends('layouts.main')

@section('title', 'Login')

@section('cabecalho')
<!--Na tela de login e de cadastro o cabeçalho deve ter só o nome do sistema-->
@endsection('cabecalho')

@section('content')

<div class="container mt-4">
    <div class="row align-items-center">
        <div class="cool-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" action="">
                
                <div class="form-floating">
                    <input type="text" class="form-control" id="inputCPF" placeholder="000.000.000-00">
                    <label for="inputCPF">CPF</label>
                </div>

                <div class="form-floating">
                <label for="inputSenha">Senha</label>
                    <input type="password" class="form-control" id="inputSenha" placeholder="******">
                </div>
                
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="guardarLogin"> Guardar login?
                    </label>
                </div>

                <button class="btn btn-lg btn-success" type="submit">Entrar</button>

            </form>
        </div>
    </div>
</div>



@endsection