@extends("layouts.template")

@section("content")
    <form action="/playlist/store" method="POST">
        @csrf
        <label for="playlistName">Vul hier de naam van de playlist in:</label>
        <input id="playlistName" name="name" type="text">

        <input type="submit" value="Verstuur">
    </form>
@endsection