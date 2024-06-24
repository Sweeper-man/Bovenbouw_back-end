@extends("layouts.template")

@section("content")
    <form action="/genre/store" method="POST">
        @csrf
        <label for="genreName">Vul hier de naam van het genre in:</label>
        <input id="genreName" name="genreName" type="text">
        

        @error("genreName")
            <p style="color:red">{{$message}}</p>
        @enderror
        <input type="submit" value="Verstuur">
    </form>
@endsection