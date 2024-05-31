@extends('layouts.navbar')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    @vite(['resources/js/app.js'])

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@if ($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
    <div class="container">
        <h1>Résultat 1 de {{ $user->firstname }} {{ $user->name }}</h1>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">ID</th>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nom</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Prénom</th>
                            <td>{{ $user->firstname }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Téléphone</th>
                            <td>{{ $user->number }}</td> <!-- Assurez-vous que votre modèle d'utilisateur a un attribut 'telephone' -->
                        </tr>
                        <tr>
                            <th scope="row">Classe</th>
                            <td>{{ $user->class }}</td>
                        </tr>
                        @foreach($sondages as $sondage)
                        <tr>
                            <th scope="row">Intéret du stage</th>
                            <td>Oui</td>
                        </tr>
                        @break
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="{{ route('resultat.resultat2') }}" class="btn btn-primary">Resultat 2</a>

</body>
</html>
@endsection