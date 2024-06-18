@extends("layouts.template")

@section("content")
    <form action="/song/store" method="POST">
        @csrf
        <label for="songName">Vul hier de naam van de song in:</label>
        <input id="songName" name="name" type="text">

        <input type="submit" value="Verstuur">
    </form>
@endsection