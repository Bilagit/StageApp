<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S'inscrire</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/Connection.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ route('index') }}">
                <img src="{{ asset('images/stageSUP.png') }}" alt="Stage SUP" style="height: 30px;">
                <span class="ml-2">Stage SUP</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('index') }}">Accueil</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('auth.signin') }}">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('auth.signup') }}">Inscription</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('auth.profil') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('show') }}">Utilisateur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('resultat.resultat1') }}">Resultat 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('resultat.resultat2') }}">Resultat 2</a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                    </li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')