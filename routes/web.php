<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmContoller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/ekleme', [FilmContoller::class, 'ekleme']);
Route::get('/eklemeyap', [FilmContoller::class, 'veritabaniyaz']);
Route::get('/tumfilmler', [FilmContoller::class, 'tumfilmlerver'])->name("tmfilmler");
Route::get('/duzenlemesayfasi/{idnumara}', [FilmContoller::class, 'duzenlemever']);
Route::get('/duzenlevekaydet/{idnumara}', [FilmContoller::class, 'duzenlemeyap'])->name("duzenlekaydet");
Route::get('/sil/{idnumara}', [FilmContoller::class, 'silme'])->name("silkaydet");
