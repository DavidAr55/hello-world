@extends('layouts.layout')

@section('title', 'iniciar sesión')

@section('content')
<main class="container-login">
    <!-- Figuras del fondo -->
    <img src="{{ asset('images/figures/square-2.png') }}" id="square-4">
    <img src="{{ asset('images/figures/square-1.png') }}" id="square-5">
    
    <div class="container-login-structure">
        <section class="container-login-box">
            <div class="gradiant-sing-up">
                <div class="container-info-gradiant-sing-up">
                    <div class="sing-up-checkable-button" id="plan-1" onclick="toggleSelectionSingUp('plan-1')">
                        <h3 class="h3-f1">Basico: $0/Mes</h3>
                        <p>Para siempre. Para aquellos que quieran probar los conceptos básicos de Hello World</p>
                    </div>
                    <div class="sing-up-checkable-button" id="plan-2" onclick="toggleSelectionSingUp('plan-2')">
                        <h3 class="h3-f1">VIP: $3.9/Mes</h3>
                        <p>Ideal para estudiantes dedicados que desean axplotar su logica de programación </p>
                    </div>
                    <div class="sing-up-checkable-button" id="plan-3" onclick="toggleSelectionSingUp('plan-3')">
                        <h3 class="h3-f1">Organizacional: $42/Año</h3>
                        <p>Ideal para instituciones educativas que quieren brindar un apoyo a sus estudiantes.</p>
                    </div>
                    <p class="more-info-sing-up"><a href="#">Más información</a></p>
                    <button class="button-7" style="max-width: 200px; margin: auto;" onclick="redirectTo('iniciar-sesion')">Iniciar sesión</button>
                </div>
            </div>
            <div class="container-login-form">
                <div class="login-form">
                    <form action="" method="post">
                        <h2>Registro</h2>
                        <div class="col-md-12 mg-top-25">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="input_user_name" name="input_user_name" type="text" placeholder="" value="" required/>
                                <label for="input_user_name">Nombre de usuario</label>
                            </div>
                        </div>
                        <div class="col-md-12 mg-top-25">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="input_email" name="input_email" type="email" placeholder="" value="" required/>
                                <label for="input_email">Correo electrónico</label>
                            </div>
                        </div>
                        <div class="row mb-3 mg-top-25">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="input_password" name="input_password" type="password" placeholder="" value="" required/>
                                    <label for="input_password">Contraseña</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="input_conform_password" name="input_conform_password" type="password" placeholder="" value="" required/>
                                    <label for="input_conform_password">Confirmar contraseña</label>
                                </div>
                            </div>
                        </div>
                        <p class="mg-top-25">
                            <input type="checkbox" >
                            <span class="checkmark"></span>
                            </label>Acepto los <a href="">Terminos de servicio</a> de Hello World y sus <a href="">Politicas de privacidad</a>
                        </p>
                        <button class="button-8">Registrarse</button>
                    </form>    
                </div>
            </div>

        </section>
    </div>
</main>
@endsection