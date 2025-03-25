<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('comics');
})->name('comics');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');