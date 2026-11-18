<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// Front-end only for now: no authentication backend is wired up yet.
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
