<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
</head>
<body class="genres">
    <h1>Tous les genres</h1>
    <div class="list">
        <ul>
        @foreach ($genres as $genre)
            <li><a href="/movies?genre={{ $genre['label'] }}">{{ $genre['label'] }}</a></li> 
        @endforeach
        </ul>
    </div>
</body>
</html>