@extends('layouts.template')

@section('title')
    Artists
@endsection

@section('content')
<h1>Hier komen de artiesten te staan</h1>
<ul>
    @foreach($artists as $artist)
        <li>{{$artist->name}} - {{$artist->woonplaats}} - {{$artist->geboortedatum}}</li>

        @foreach($artist->albums as $album)
            {{$album->name}}
        @endforeach
    @endforeach
</ul>
@endsection