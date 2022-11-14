<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->originalTitle}}</title>
</head>
<body>
    <!-- Movies -->
    <div class="container">
        <h2>{{ $movie->originalTitle}}</h2>
        <div class="content">
            <img src="{{ $movie->poster}}" alt="">
        </div>
        <div class="plot">
            <h3>Synopsis :</h3>
            <p>{{ $movie->plot}}</p>
        </div>
    </div>
</body>
</html>