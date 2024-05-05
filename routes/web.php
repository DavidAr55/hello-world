<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/inicio');

Route::get('/inicio', function () {
    return view('landing-page');
});

Route::get('/iniciar-sesion', function () {
    return view('login.login');
});