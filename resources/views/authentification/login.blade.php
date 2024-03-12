<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion</title>
    </head>

    <body>
        <h1>Connexion</h1>
        <form action="" method="post">
            @csrf
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
            <button type="submit">Se connecter</button>
        </form>
    </body>