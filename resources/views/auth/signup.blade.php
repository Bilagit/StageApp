<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S'inscrire</title>
</head>
<body>
    <form action="{{ route('auth.dosignup') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <label for="number">Numéro</label>
            <input type="text" name="number" id="number">
        </div>
        <div>
            <label for="ecole">Ecole</label>
            <input type="text" name="ecole" id="ecole">
        </div>
        <div>
            <label for="domaine">Domaine</label>
            <input type="text" name="domaine" id="domaine">
        </div>
        <div>
            <label for="class">Classe</label>
            <input type="text" name="class" id="class">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button class="btn btn-primary">S'inscrire</button>
    </form>
</body>
</html>