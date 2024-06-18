@extends("layouts.template")

@section("content")
    <form action="/genre/store" method="POST">
        @csrf
        <label for="genreName">Vul hier de naam van het genre in:</label>
        <input id="genreName" name="name" type="text">

        <input type="submit" value="Verstuur">
    </form>
@endsection