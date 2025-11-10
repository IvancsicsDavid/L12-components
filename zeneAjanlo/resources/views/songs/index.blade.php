@extends('layout')


@section('content')
<table style="width: 100%;margin:auto">
    <tr>
        <td>
<div style="width: 85%;border:1pt black solid;padding:6pt;text-align:center">
    <h2>Songs genres:</h2>
    <ul>
    @foreach ($genres as $genre)
    | <a href="{{route('songs.genre', $genre)}}">{{$genre}}</a> |
    @endforeach
    </ul>
<br>
<h2>Songs:</h2>
    <ul>
    @foreach ($songs as $id => $song)
    <li> <a href="{{route("songs.song", $id)}}">{{$song["title"]}}</a> ({{$song["year"]}})</li>
    @endforeach
    </ul>
</div>
        </td>
        <td>
<div style="width: 85%;border:1pt black solid;padding:6pt;text-align:center">
    @foreach ($songs as $id => $song)
        @if($id===$randId)
            <img src="{{$song['image']}}">
            <h3>{{$song['title']}} - {{$song['artist']}}</h3>
            Description:
            <p>{{$song['description']}}</p>
        @endif
    @endforeach
</div>
        </td>
    </tr>
</table>
@endsection
