@extends('layout')


@section('content')
<h2>Filtered songs:</h2>
    <ul>
    @foreach ($filteredSongs as $song)
<div style="width: 85%;border:1pt black solid;padding:6pt;text-align:center">
        <img src="{{$song['image']}}">
            <h3>{{$song['title']}} - {{$song['artist']}}</h3>
            Description:
            <p>{{$song['description']}}</p>
            </div>
    @endforeach
    </ul>
@endsection
