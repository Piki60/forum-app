<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Créer un blog</title>
        <script src="{{ asset('js/editor.js') }}"></script>
        
    </head>

    <body>

        <h1>Créer un blog</h1>
        <form action="" method="post">
            @csrf
            <div>
                <label for="title">Titre</label>
                <input type="text" name="title" id="title">
                @error('title')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="content">Contenu</label>
                <div id="editorjs"></div>
                @error('content')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Valider</button>
        </form>
    </body>
</html>
