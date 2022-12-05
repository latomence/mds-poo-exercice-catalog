<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Movies list</title>
</head>
<body class="movies_list">
    @include('navbar')
    <h1>Movies list</h1>
    <div class="nav">
        <div class="top">
            <a href="/movies?orderBy=primaryTitle&order=asc">Order By Asc</a>
            <a href="/movies?orderBy=primaryTitle&order=desc">Order By Desc</a>
        </div>
        <div class="genres">
            @foreach ($genres as $genre)
                <a href="/movies?genre={{ $genre['label'] }}">{{ $genre['label'] }}</a>
            @endforeach
        </div>
    </div>
    <div class="movies">
        <div class="wrapper">
            @foreach ($movies as $movie)
            <div class="movie">
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                    <h4>{{ $movie->primaryTitle }}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="pagination">
        {{ $movies->appends(request()->query())->links() }}
    </div>
</body>
</html>