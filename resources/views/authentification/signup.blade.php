<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inscription</title>
    </head>

    <body>
        <h1>Inscription</h1>
        <form action="" method="post">
            @csrf
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom">
                @error('nom')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom">
                @error('prenom')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo">
                @error('pseudo')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
                @error('password')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password_confirmation">Confirmation du mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
                @error('password_confirmation')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </body>
</html>
