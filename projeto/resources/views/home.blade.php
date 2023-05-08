@extends('layouts.main')

@section('title', 'Login')

@section('cabecalho')
<!--Cabecalho das telas (fora login e cadastro)-->
    <div class="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-row-reverse" id="menuNavbar">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link active d-flex align-itens-center" href="home">
                        Início
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house ms-1 " viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-itens-center" href="perfil">
                        Perfil
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle ms-1" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-itens-center" href="login">
                        Sair
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right ms-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>

@endsection('cabecalho')

@section('content')

    <div class="container-fluid">
        <nav class="navbar navbar-light bg-light shadow">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Menu app</span>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuLateral">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse flex-row-reverse" id="menuLateral">
                    <ul class="navbar-nav me-auto ">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-itens-center" href="home">
                                Tela inicial
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-itens-center" href="cadastrarItem">
                                Cadastrar item
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-itens-center" href="patrimonios">
                                Ver itens cadastrados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-itens-center" href="reservar">
                                Reservar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-itens-center" href="reservados">
                                Ver reservas
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

@endsection('content')