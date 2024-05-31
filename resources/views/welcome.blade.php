<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/Connection.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('index') }}">
            <img src="{{ asset('images/stageSUP.png') }}" alt="Stage SUP" style="height: 30px;">
            <span class="ml-2">Stage SUP</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link text-white" href="">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="">Déconnexion</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Confirmez-vous votre intérêt pour ce stage ?</h5>
            <form action="{{ route('sondage.store') }}" method="POST">
                @csrf
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reponse" id="oui" value="1" required>
                    <label class="form-check-label" for="oui">Oui</label>
                </div>.

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reponse" id="non" value="0" required>
                    <label class="form-check-label" for="non">Non</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
