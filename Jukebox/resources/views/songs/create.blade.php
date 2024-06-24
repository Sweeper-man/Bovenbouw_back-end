@extends("layouts.template")

@section("content")
    <form action="/song/store" method="POST">
        @csrf
        <label for="songName">Vul hier de naam van het liedje in:</label>
        <input id="songName" name="songName" type="text">
        @error("songName")
            <p style="color:red">{{$message}}</p>
        @enderror

        <label for="">Vul hier de duration van het liedje in:</label>
        <input name="duration" type="number">
        @error("duration")
            <p style="color:red">{{$message}}</p>
        @enderror

        <label for="">Vul hier het genre_id in:</label>
        <input name="genre_id" type="text">
        @error("genre_id")
            <p style="color:red">{{$message}}</p>
        @enderror

        <input type="submit" value="Maak nummer aan">
    </form>
@endsection