<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hier komen de artiesten te staan</h1>
    <ul>
        @foreach($artists as $artist)
            <li>{{$artist->name}} - {{$artist->woonplaats}} - {{$artist->geboortedatum}}</li>
        @endforeach
    </ul>
</body>
</html>