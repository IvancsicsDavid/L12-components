<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;

class SongController extends Controller
{
    public function index()
    {
        $songs = song::getSongs();
        $genres = collect($songs)->pluck('genre')->unique()->values();
        $randId = random_int(1, count($songs));

        return view('songs.index', compact('songs','genres','randId'));
        //return view('movies.index', ['movies' => $movies]);
    }

    public function genre(string $genre)
    {
        $songs = song::getSongs();
        $filteredSongs = collect($songs)->filter(function ($song) use ($genre) {
            return $song['genre'] === $genre;
        });

        if ($filteredSongs->isEmpty()){
            abort(404,"invalid category:$genre");
        }

        return view("songs.genre", compact('filteredSongs'));
    }

    public function song(string $id)
    {
        $songs = song::getSongs();

        $selectedSong=$songs[$id];

        $sameCategorySongs = collect($songs)
            ->filter(fn($m, $key) => $m['genre'] === $selectedSong['genre'] && $key != $id)
            ->take(3);



        //$filteredSongs=collect($songs)->filter(function ($song) use ($genre){return $song['genre'] === $genre;})

        return view("songs.song", compact('selectedSong','id','songs','sameCategorySongs'));
    }
}
