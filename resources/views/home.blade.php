<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="home">
    @include('navbar')
    <div class="container">
        <h1>{{ config('app.name') }}</h1>

        <div class="movies">
            <div class="wrapper">
                @foreach ($movies as $movie)
                <div class="movie">
                    <a href="/movies/{{ $movie->id }}">
                        <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
