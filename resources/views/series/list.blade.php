<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Series list</title>
</head>
<body class="list">
    @include('navbar')
    <h1>Series list</h1>
    <div class="nav">
        <div class="top">
            <a href="/series?orderBy=primaryTitle&order=asc">Order By Asc</a>
            <a href="/series?orderBy=primaryTitle&order=desc">Order By Desc</a>
            <a href="/series">Clear</a>
        </div>
        <div class="genres">
            @foreach ($genres as $genre)
                <a href="/series?genre={{ $genre['label'] }}">{{ $genre['label'] }}</a>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="wrapper">
            @foreach ($series as $serie)
            <div class="content">
                <a href="/Series/{{ $serie->id }}">
                    <img src="{{ $serie->poster }}" alt="{{ $serie->primaryTitle }}">
                    <h4>{{ $serie->primaryTitle }}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="pagination">
        {{ $series->appends(request()->query())->links() }}
    </div>
</body>
</html>