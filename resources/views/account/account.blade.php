<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon compte</title>
</head>
<body>
    <!--informations personnelles-->
    <div>
        <h2>Informations personnelles</h2>
        <p>Nom: {{ $user->nom }}</p>
        <p>Prénom: {{ $user->prenom }}</p>
        <p>Email: {{ $user->email }}</p>
        <a href="{{ route('account.edit') }}">
            <button>Modifier</button>
        </a>

        <!--deconnexion-->
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Se déconnecter</button>
        </form>
    </div>

    <!--TODO ajouter les blogs de l'utilisateur-->
</body>
</html>


