@extends('layouts.layout')

@section('title', 'Hello world!!')

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
                        <h2>Ingresa tu nueva contraseña</h2>
                        <div class="col-md-12 mg-top-25">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="input_password" name="input_password" type="passeord" placeholder="" value="" required/>
                                <label for="input_email">Nueva contraseña</label>
                            </div>
                        </div>
                        <div class="col-md-12 mg-top-25">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="input_confirm_password" name="input_confirm_password" type="password" placeholder="" value="" required/>
                                <label for="input_email">Confirmar contraseña</label>
                            </div>
                        </div>
                        <div class="col-md-12 mg-top-25">
                            <button class="button-8">Cambiar contraseña</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="gradiant-login">
                <div class="container-info-gradiant">
                    <div class="container-li-password">
                        <p>La contraseña debe contener:</p>
                        <li>Al menos 8 caracteres.</li>
                        <li>Al menos una letra mayúscula (A-Z).</li>
                        <li>Al menos un dígito (0-9).</li>
                        <li>Al menos un carácter especial (por ejemplo: !, @, #, $, %, ^, &, *).</li>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>
@endsection