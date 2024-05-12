@extends('layouts.layout')

@section('title','Error - 500')

@section('content')

<style>
     body {
        font-family: 'Turret Road', sans-serif; 
        background-color: rgb(30, 31, 41);
        margin: 0;
        padding: 0;
    }
    .container-error-500 {
        text-align: center;
        padding: 1px;
        margin-bottom: 300px; /* con esto cambio en espacio de las letras al footer */
    }
    .container-error-500 h1 {
        font-size: 5em;
        margin-top: 20vh;/*espacio entre barra de navegacion y texto*/
        color: white;
        font-weight: bold; /* Hace el texto más grueso */
    }
    .container-error-500 h2 {
        font-size: 2.5em;
        color: white;
    }
    .container-error-500 h3 {
        font-size: 1.7em;
        color: white;
    }
    .container-error-500 a {
        font-size: 1.1em;
        color: white;
        text-decoration: underline;
    }
    .container-error-500 .letters {
        color: rgb(230, 17, 79);
    }
</style>

<!--  fuente de Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Turret+Road&display=swap">

<div class="container-error-500">
    <h1>Error - <span class="letters">500</span></h1>
    <h2><span class="letters">E</span>RROR <span class="letters">I</span>NTERNO <span class="letters">D</span>EL <span class="letters">S</span>ERVIDOR</h2>
    <br>
    <H3>Internal error: user "Hot_Taco_Loco" is not a root user.</H3>
    <br>
    <h6><a href="#">Volver a la página principal.</a></h6>
</div>

@endsection
