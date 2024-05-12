@extends('layouts.layout')

@section('title','Error - 404')

@section('content')

<style>
    body {
      
        background-color: rgb(30, 31, 41);
        margin: 0;
        padding: 0;
    }
    .container-error-404 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 90vh;
        position: relative;
    }
    .container-error-404 h1,
    .container-error-404 h2,
    .container-error-404 a {
        margin: 10px 0;
        text-align: center;
        color: white;
    }
    .container-error-404 h1 {
        font-size: 5vw; /* tamaño de la fuente a unidades relativas */
        margin-top: 5vh;
        color: white;
        font-weight: bold; /* Hace el texto más grueso */
    }
    .container-error-404 h2 {
        font-size: 2.5vw;
        /*font-weight: bold; /* Hace el texto más grueso */
    }
    .container-error-404 a {
        font-size: 1.2vw;
        text-decoration: underline;
    }
    .container-error-404 .letters {
        color: rgb(230, 17, 79);
    }
    /*efecto*/
    .image-container-effect img {
        max-width: 30%; /* Cambié el tamaño de la imagen a unidades relativas */
        height: auto;
        position: absolute;
        top: 65%; /*  posición vertical de la imagen */
        left: 70%; /* posición horizontal de la imagen */
        transform: translate(-50%, -50%);
    }
    /*astro*/
    .image-container-astro img {
        max-width: 12%; /*tamaño de la imagen a unidades relativas */
        height: auto;
        position: absolute;
        top: 68%; /*  posición vertical de la imagen */
        left: 70%; /*  posición horizontal de la imagen */
        transform: translate(-50%, -50%);
    }
</style>


<div class="container-error-404">
    <h1>Error - <span class="letters">404</span></h1>
    <h2><span class="letters">P</span>AGINA <span class="letters">N</span>O <span class="letters">E</span>NCONTRADA</h2>
    <h6><a href="inicio">Volver a la página principal.</a></h6>
    <div class="image-container-effect">
        <img src="images/error/effect.png" alt="">
    </div>
</div>

<div class="image-container-astro">
    <img src="images/error/astro.png" alt="">
</div>

@endsection