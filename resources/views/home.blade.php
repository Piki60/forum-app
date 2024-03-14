<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
</head>
<body>
    <div>
        <h2>Les blogs</h2>
        <ul>
            @foreach($blogs as $blog)
                <li>
                    {{ $blog->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>


