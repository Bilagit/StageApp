<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/Connection.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid h-100 d-flex flex-column flex-lg-row">
        <!-- Partie du formulaire -->
        <div class="flex-grow-1 bg-white d-flex justify-content-center align-items-center">
            <div class="max-w-md p-8">
                <div class="mb-3 d-lg-flex align-items-center">
                    <h1 class="display-4 font-weight-bold mb-10 mt-2 mt-lg-0">Stage SUP</h1>
                </div>
                <h1 class="display-4 font-weight-bold mb-4">Bienvenue(e)</h1>
                <h2 class="h3 font-weight-semibold mb-4">Connectez-vous</h2>
                <form action="{{ route('auth.dosignin') }}" method="POST">
                    @csrf
                    <div class="form-group position-relative">
                        <img src="{{ asset('images/Alternate email.svg') }}" alt="Email" class="position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);">
                        <input type="email" id="email" name="email" class="form-control pl-5" placeholder="E-mail" required>
                    </div>
                    <div class="form-group position-relative">
                        <img src="{{ asset('images/Lock.svg') }}" alt="Lock" class="position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);">
                        <input type="password" id="password" name="password" class="form-control pl-5" placeholder="Mot de Passe" required>
                        <img src="{{ asset('images/eye.svg') }}" alt="Toggle Password Visibility" class="position-absolute cursor-pointer" style="right: 10px; top: 50%; transform: translateY(-50%);" onclick="togglePasswordVisibility()">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Se Connecter</button>
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
    const passwordField = document.getElementById('password');
    const passwordFieldType = passwordField.getAttribute('type');
    passwordField.setAttribute('type', passwordFieldType === 'password' ? 'text' : 'password');
}

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
