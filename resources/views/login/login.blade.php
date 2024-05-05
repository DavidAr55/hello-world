@extends('layouts.layout')

@section('title', 'iniciar sesión')

@section('content')
<main class="container-login">
    <!-- Figuras del fondo -->
    <img src="{{ asset('images/figures/square-2.png') }}" id="square-4">
    <img src="{{ asset('images/figures/square-1.png') }}" id="square-5">
    
    <div class="container-login-structure">
        <section class="container-login-box">
            <div class="container-login-form">
                <div class="login-form">
                    <form action="" method="post">
                        <h2>iniciar sesión</h2>
                        <div class="col-md-12 mg-top-25">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="input_email" name="input_email" type="email" placeholder="" value="" required/>
                                <label for="input_email">Correo electrónico o usuario</label>
                            </div>
                        </div>
                        <div class="col-md-12 mg-top-25">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="input_password" name="input_password" type="password" placeholder="" value="" required/>
                                <label for="input_password">Contraseña</label>
                            </div>
                        </div>
                        <p class="mg-top-25">Olvidaste tu <a href="">contraseña</a>?</p>
                        <button class="button-8">Iniciar sesión</button>
                    </form>
                </div>
            </div>
            <div class="gradiant-login">
                <div class="container-info-gradiant">
                    <h2>¿Nuevo en Hello World?</h2>
                    <h2>¡Registrate gratis!</h2>
                    <button class="button-7 mg-top-25" onclick="redirectTo('registro')">Registrarse</button>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection