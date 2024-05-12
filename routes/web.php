<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/inicio');

Route::get('/inicio', function () {
    return view('landing-page');
});

//Rutas de carpeta login
Route::get('/iniciar-sesion', function () {
    return view('login.login');
});

Route::get('/registro', function () {
    return view('login.sing-up');
});

Route::get('/404', function () {
    return view('errors.404');
});

Route::get('/403', function () {
    return view('errors.403');
});

Route::get('/500', function () {
    return view('errors.500');
});

Route::get('/recuperar-contraseña', function () {
    return view('login.recovery');
});