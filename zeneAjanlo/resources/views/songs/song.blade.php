@extends('layout')


@section('content')
<table style="width: 100%;text-align:center">
    <tr>
        <td><a href="{{route("songs.song", $id-1)}}"> Előző</a></td>
        <td><a href="{{route("songs.song", $id+1)}}"> Következő</a></td>
    </tr>
</table>
    <h2>{{$selectedSong["title"]}} - ({{$selectedSong["year"]}})</h2>
    <h3>Director: {{$selectedSong["artist"]}}</h3>
    <img src="{{$selectedSong["image"]}}">
    <br>
    <hr>
    <br>
    <p>{{$selectedSong["description"]}}</p>

    <div style="border:2px solid black">
        <h4>Hasonló zenék:</h4>
        @foreach ($songs as $song)
        @if ($song['genre']===$selectedSong['genre'])
            <img src={{$song['image']}} style="margin: 10px">
        @endif
        @endforeach
    </div>
@endsection
