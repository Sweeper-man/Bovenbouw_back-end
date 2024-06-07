@extends("layouts.template")

@section("content")
    <h1>Hier staan alle genres</h1>
    <ul>
        @foreach($genres as $genre)
            <li>{{$genre->name}}</li>
        @endforeach
    </ul>
@endsection