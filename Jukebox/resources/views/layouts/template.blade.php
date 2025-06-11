<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" herf="style.css">
    <title>@yield('title')</title>

    @stack('styles')
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{route('artist.index')}}">Artists</a></li>
            <li><a href="{{route('album.index')}}">Albums</a></li>
        </ul>
    </nav>

@yield('content')

<footer>
    &copy; Sean van Gooswilligen - 2024
</footer>

@stack('scripts')
</body>
</html>