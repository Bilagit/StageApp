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
                        <a class="nav-link text-white" href="{{ route('profile') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('auth.logout') }}">Déconnexion</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid h-100 d-flex flex-column flex-lg-row">
    <!-- Partie du formulaire -->
    <div class="flex-grow-1 bg-white d-flex justify-content-center align-items-center">
        <div class="max-w-md p-8">
            <div class="mb-3 d-lg-flex align-items-center">
                <img src="{{ asset('images/stageSUP.png') }}" alt="Logo">
                <h1 class="display-4 font-weight-bold mb-10 mt-2 mt-lg-0">Stage SUP</h1>
            </div>
            <h1 class="display-4 font-weight-bold mb-4">Inscription</h1>
            <form action="{{ route('auth.dosignup') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6 position-relative">
                        <img src="{{ asset('images/person_circle_icon_159926.svg') }}" alt="Person Icon" class="position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);">
                        <input type="text" name="firstname" id="firstname" class="form-control pl-5" placeholder="Prénom" required>
                    </div>
                    <div class="form-group col-md-6 position-relative">
                        <img src="{{ asset('images/wpf_name.svg') }}" alt="Name Icon" class="position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);">
                        <input type="text" name="name" id="name" class="form-control pl-5" placeholder="Nom" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 position-relative">
                        <img src="{{ asset('images/Alternate email.svg') }}" alt="Email Icon" class="position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);">
                        <input type="email" name="email" id="email" class="form-control pl-5" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-6 position-relative">
                        <img src="{{ asset('images/bi_phone.svg') }}" alt="Phone Icon" class="position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);">
                        <input type="tel" name="number" id="number" class="form-control pl-5" placeholder="Téléphone" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ecole">Ecole</label>
                        <select name="ecole" id="ecole" class="form-control">
                            <option value="" selected>Sélectionnez une école</option>
                            <option value="esp">ESP</option>
                            <option value="rose dieng lab">Rose Dieng Lab</option>
                            <option value="sup de co">DEFAR Sci</option>
                            <option value="bakeli">Bakeli</option>
                            <option value="xarala">Xarala</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="domaine">Domaine</label>
                        <select name="domaine" id="domaine" class="form-control">
                            <option value="" selected>Sélectionnez un domaine</option>
                            <option value="informatique">Informatique</option>
                            <option value="reseau Telecom">Reseau Telecom</option>
                            <option value="mecanique">Mecanique</option>
                            <option value="electrique">Electrique</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="class">Classe</label>
                        <input type="text" name="class" id="class" class="form-control" placeholder="Classe" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="niveau">Niveau</label>
                        <select name="niveau" id="niveau" class="form-control">
                            <option value="" selected>Sélectionnez un niveau</option>
                            <option value="niveau1">Bac +1</option>
                            <option value="niveau2">Bac +2</option>
                            <option value="niveau3">Bac +3</option>
                            <option value="niveau4">Bac +4</option>
                            <option value="niveau5">Bac +5</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 position-relative">
                        <label for="password">Mot de Passe</label>
                        <img src="{{ asset('images/Lock.svg') }}" alt="Lock Icon" class="position-absolute" style="left: 10px; top: 70%; transform: translateY(-50%);">
                        <input type="password" name="password" id="password" class="form-control pl-5" placeholder="Mot de Passe" required>
                        <img src="{{ asset('images/eye.svg') }}" alt="Toggle Password Visibility" class="position-absolute cursor-pointer" style="right: 10px; top: 70%; transform: translateY(-50%);" onclick="togglePasswordVisibility()">
                    </div>
                    <div class="form-group col-md-6 position-relative">
                        <label for="password_confirmation">Confirmer Mot de Passe</label>
                        <img src="{{ asset('images/Lock.svg') }}" alt="Lock Icon" class="position-absolute" style="left: 10px; top: 70%; transform: translateY(-50%);">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control pl-5" placeholder="Confirmer Mot de Passe" required>
                        <img src="{{ asset('images/eye.svg') }}" alt="Toggle Password Visibility" class="position-absolute cursor-pointer" style="right: 10px; top: 70%; transform: translateY(-50%);" onclick="togglePasswordVisibility()">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
            </form>
        </div>
    </div>
    <!-- Partie de couleur grise -->
    <div class="flex-grow-1 bg-light d-flex justify-content-center align-items-center">
        <img src="{{ asset('images/banner_login.png') }}" alt="Banner" class="d-none d-lg-block">
    </div>
</div>
<script>
    function togglePasswordVisibility() {
        const passwordFields = [document.getElementById('password'), document.getElementById('password_confirmation')];
        passwordFields.forEach(passwordField => {
            const passwordFieldType = passwordField.getAttribute('type');
            passwordField.setAttribute('type', passwordFieldType === 'password' ? 'text' : 'password');
        });
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
