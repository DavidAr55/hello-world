@extends('layouts.layout')

@section('title','Error - 403')

@section('content')

<style>
     body {
        font-family: 'Turret Road', sans-serif; 
        background-color: rgb(30, 31, 41);
        margin: 0;
        padding: 0;
    }
    .container-error-403 {
        text-align: center;
        padding: 1px;
        margin-bottom: 300px; /* con esto cambio en espacio de las letras al footer */
    }
    .container-error-403 h1 {
        font-size: 5em;
        margin-top: 20vh;
        color: white;
        font-weight: bold; /* Hace el texto más grueso */
    }
    .container-error-403 h2 {
        font-size: 3em;
        color: white;
    }
    .container-error-403 a {
        font-size: 1.2em;
        color: white;
        text-decoration: underline;
    }
    .container-error-403 .letters {
        color: rgb(230, 17, 79);
    }
</style>

<!--  fuente de Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Turret+Road&display=swap">

<div class="container-error-403">
    <h1>Error - <span class="letters">403</span></h1>
    <h2><span class="letters">A</span>cceso <span class="letters">N</span>o <span class="letters">A</span>utorizado</h2>
    <br>
    <h6><a href="#">Volver a la página principal.</a></h6>
</div>

@endsection
