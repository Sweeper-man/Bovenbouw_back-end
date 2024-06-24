@extends("layouts.template")

@section("content")
    <h1>Hier is een lijst met alle liedjes</h1>
    @foreach ($songList as $song)
    - {{$song->name}} - genre: {{$song->genre->name}}
    <br>
    @endforeach
@endsection