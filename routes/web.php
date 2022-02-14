<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('/', 'GuestController@index') -> name('home');

// // AUTH
Route::get('/login', 'GuestController@login') -> name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/register', 'GuestController@register') -> name('register');
Route::post('/register', 'Auth\RegisterController@register');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');


// API
Route::prefix('/api') -> group(function() {
    Route::get('/videogames/get', 'ApiController@apiGetVideogames') -> name('api.videogames.get');
    Route::get('/videogame/delete/{id}', 'ApiController@apiDeleteVideogame') -> name('api.videogame.delete');
});
