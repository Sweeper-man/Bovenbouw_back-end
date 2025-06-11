@extends('layouts.template')

@section('title')
    Albums
@endsection

@section('content')
<h1>Hier komen de albums te staan</h1>
<ul>
    @foreach($albums as $album)
        <li>{{$album->name}} - {{$album->uitkomstdatum}}</li>
    @endforeach
</ul>
@endsection