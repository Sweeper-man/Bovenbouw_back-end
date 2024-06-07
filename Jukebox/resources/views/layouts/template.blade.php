<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" herf="css/style.css">
    @stack("styles")
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="playlist">Playlists</a></li>
            <li><a href="genre">Genre</a></li>
        </ul>
    </nav>

@yield("content")

<footer>
    &copy; Sean van Gooswilligen - 2024
</footer>

</body>
</html>