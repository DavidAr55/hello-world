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
                        <h2>Recuperación de contraseña</h2>
                        <div class="col-md-12 mg-top-25">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="input_email" name="input_email" type="email" placeholder="" value="" required/>
                                <label for="input_email">Correo electrónico</label>
                            </div>
                        </div>
                        <p class="mg-top-25">Volver al <a href="">inicio de sesíon</a></p>
                        <button class="button-8">Enviar al correo</button>
                    </form>
                </div>
            </div>
            <div class="gradiant-login">
                <div class="container-info-gradiant">
                    <h2>Introduce tu código de verificación</h2>
                    <form action="" class="container-recovery">
                        <input class="form-control input-recovery" id="input_recovery_1" name="input_recovery_1" type="text" pattern="[0-9]" required/>
                        <input class="form-control input-recovery" id="input_recovery_2" name="input_recovery_2" type="text" pattern="[0-9]" required/>
                        <input class="form-control input-recovery" id="input_recovery_3" name="input_recovery_3" type="text" pattern="[0-9]" required/>
                        <input class="form-control input-recovery" id="input_recovery_4" name="input_recovery_4" type="text" pattern="[0-9]" required/>
                        <input class="form-control input-recovery" id="input_recovery_5" name="input_recovery_5" type="text" pattern="[0-9]" required/>

                    </form>
                    <button class="button-7 mg-top-25" onclick="">Validar código</button>
                </div>
            </div>
        </section>
    </div>

</main>
@endsection