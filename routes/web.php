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
