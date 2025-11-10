<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get("/", [SongController::class,'index']);

Route::get("/Songs/{genre}", [SongController::class, 'genre'])->name('songs.genre');

Route::get("/song/{id}", [SongController::class, 'song'])->name('songs.song');
