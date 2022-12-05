<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $series->originalTitle}}</title>
</head>
<body class="show">
    @include('navbar')
    <!-- Movies -->
    <div class="container">
        <div class="content">
            <img src="{{ $series->poster}}" alt="">
        </div>
        <h2>{{ $series->originalTitle}}</h2>
        <div class="plot">
            <h3>Synopsis :</h3>
            <p>{{ $series->plot}}</p>
        </div>
        <a href="javascript:history.back()">Retour</a>
    </div>
</body>
</html>