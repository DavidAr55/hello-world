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

Route::get('/recuperar-contraseña', function () {
    return view('login.recovery');
});