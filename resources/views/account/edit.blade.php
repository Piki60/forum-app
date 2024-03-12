<!--TODO Faire un modal pour la modification du compte-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon compte - Modifier</title>
</head>
<body>
    <h1>Modifier mon compte</h1>
    <form action="{{ route('account.update') }}" method="post">
        @csrf
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="{{ old('nom') ?? $user->nom }}">
            @error('nom')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" value="{{ old('prenom') ?? $user->prenom }}">
            @error('prenom')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') ?? $user->email }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>