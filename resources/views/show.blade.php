<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste étudiants</title>
</head>
<body>
    <h3>Liste des utilisateurs</h3>
    <table>
        <thead>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>EMAIL</th>
            <th>NUMERO</th>
            <th>ECOLE</th>
            <th>CLASSE</th>
            <th>DOMAINE</th>
            <th>NIVEAU</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{$user->id}}
                    </td>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        {{$user->firstname}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                        {{$user->number}}
                    </td>
                    <td>
                        {{$user->ecole}}
                    </td>
                    <td>
                        {{$user->class}}
                    </td>
                    <td>
                        {{$user->domaine}}
                    </td>
                    <td>
                        {{$user->niveau}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>