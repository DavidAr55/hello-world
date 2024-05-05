@extends('layouts.layout')

@section('title', 'Hello world!!')

@section('content')
    <main class="main-container">
        <!-- Figuras del fondo -->
        <img src="{{ asset('images/figures/square-1.png') }}" id="square-1">
        <img src="{{ asset('images/figures/square-2.png') }}" id="square-2">
        <img src="{{ asset('images/figures/square-3.png') }}" id="square-3">

        <div class="landing-page-head" id="inicio">
            <div class="landing-title">
                <h1 class="h1-inter">Los mejores programadores dejan que su código hable por sí mismo</h1>
                <div class="container-objetivo">
                    <p>Queremos ayudarte a desarrollar y mejorar tu lógica de programación. Bienvenido/a a Hello World, donde cada línea es el inicio de algo grandioso.</p>
                </div>
                <div class="landing-head-info-buttons">
                    <button class="button-5">¡Empezar Ahora!</button>
                    <button class="button-6" style="margin-left: 18px;">Video tutorial</button>
                </div>
            </div>
            <div class="landing-ide">
                <div class="header-ide">
                    <div class="container-title-header-ide">
                        <img src="{{ asset('images/cpp-icon.png') }}" id="c++ icon">
                        <div class="header-ide-grid-container">
                            <div class="header-ide-title">serie-fibonacci.cpp</div>
                            <div class="header-ide-copy"><button id="copyButton"><i class="fa-regular fa-clone"></i> Copiar código</button></div>
                            <div class="header-ide-assistant">
                                <button class="button">
                                    <svg fill="var(--color-1)" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                            <path d="M434.863,126.093V77.137h-48.956V0h-33.391v77.137h-42.083V0h-33.391v77.137h-42.083V0h-33.391v77.137h-42.083V0h-33.391 v77.137H77.137v48.956H0v33.391h77.137v42.083H0v33.391h77.137v42.083H0v33.391h77.137v42.083H0v33.391h77.137v48.956h48.956V512 h33.391v-77.137h42.083V512h33.391v-77.137h42.083V512h33.391v-77.137h42.083V512h33.391v-77.137h48.956v-48.956H512v-33.391 h-77.137v-42.083H512v-33.391h-77.137v-42.083H512v-33.391h-77.137v-42.083H512v-33.39H434.863z M401.473,401.471h-0.001H110.529 V110.529h290.944V401.471z"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                            <path d="M375.773,229.532c0-22.913-14.194-42.903-34.426-51.239c-1.374-26.935-23.718-48.426-50.987-48.426 c-13.221,0-25.283,5.052-34.36,13.325c-9.077-8.273-21.139-13.325-34.36-13.325c-27.27,0-49.615,21.491-50.987,48.426 c-20.234,8.336-34.426,28.326-34.426,51.239c0,9.577,2.445,18.593,6.742,26.459c-4.391,8.051-6.742,17.113-6.742,26.478 c-0.001,23.125,14.25,42.974,34.428,51.253c1.381,26.928,23.722,48.411,50.986,48.411c13.221,0,25.283-5.052,34.36-13.325 c9.077,8.273,21.139,13.325,34.36,13.325c27.265,0,49.606-21.483,50.986-48.411c20.176-8.28,34.428-28.129,34.428-51.253 c0-9.366-2.351-18.428-6.742-26.478C373.328,248.124,375.773,239.108,375.773,229.532z M239.304,331.078 c0,9.74-7.924,17.664-17.664,17.664c-7.943,0-14.674-5.271-16.889-12.497c10.656-2.612,20.43-8.341,27.914-16.604l-24.749-22.417 c-4.226,4.667-10.018,7.237-16.308,7.237c-12.127,0-21.992-9.866-21.992-21.992c0-0.697,0.033-1.389,0.098-2.076 c6.719,2.904,14.12,4.521,21.895,4.521v-33.391c-12.127,0-21.992-9.866-21.992-21.993c-0.001-7.907,4.25-14.938,10.63-18.817 c5.774,8.031,13.85,14.415,23.463,18.021l11.727-31.264c-6.855-2.571-11.461-9.222-11.461-16.549 c0-9.74,7.924-17.664,17.664-17.664c9.74,0,17.664,7.924,17.664,17.664V331.078z M342.285,280.393 c0.065,0.687,0.098,1.379,0.098,2.076c0,12.127-9.866,21.992-21.993,21.992c-6.289,0-12.081-2.57-16.307-7.237l-24.748,22.417 c7.485,8.263,17.258,13.993,27.914,16.604c-2.215,7.227-8.947,12.497-16.889,12.497c-9.74,0-17.664-7.924-17.664-17.664V180.922 c0-9.74,7.924-17.664,17.664-17.664c9.739,0,17.664,7.924,17.664,17.664c0,7.327-4.606,13.978-11.461,16.549l11.727,31.264 c9.613-3.606,17.688-9.991,23.463-18.021c6.38,3.879,10.631,10.911,10.631,18.817c0,12.127-9.866,21.993-21.993,21.993v33.391 C328.164,284.915,335.566,283.297,342.285,280.393z"></path>
                                            </g>
                                        </g>
                                        </g>
                                    </svg> 
                                    <span>Asistente virtual</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-ide">
                    <section class="body-ide-container" id="editor"></section>
                </div>
            </div>
        </div>

        <section class="section-landingpage" id="explora">
            <h1 class="h1-inter pd-h1 center-text">Aprende de una manera estructurada</h1>
            <div class="container-comparation">
                <div class="comparation">
                    <h2 class="h2-f1">Sin Hello World</h2>
                    <p>Innumerables guías dispersas. Navegando a través de lecciones anticuadas. Sumergido en océano de información abrumadora sobre programación.</p>
                    <img src="{{ asset('images/learn-with-out-Hello-World.png') }}" alt="Aprendizaje sin Hello World">
                </div>
                <div class="comparation">
                    <h2 class="h2-f1">Con <span style="background: linear-gradient(to right, #E61650, #D438BD); color: transparent; -webkit-background-clip: text; background-clip: text;">Hello World</span></h2>
                    <p>Simplifica tu aprendizaje con contenido actualizado y seleccionado. Domina la codificación con claridad  y confianza a tu ritmo.</p>
                    <img src="{{ asset('images/learn-with-Hello-World.png') }}" class="pd-top-25" alt="Aprendizaje con Hello World">
                </div>
            </div>
        </section>

        <section class="section-landingpage"  id="practica">
            <h1 class="h1-inter pd-h1 center-text">Practica tu logica de programación</h1>
            <div class="container-sample-exercise">
                <div class="row-sample-exercise">
                    <div class="header-sample-exercise">

                    </div>
                    <div class="body-sample-exercise">
                        <p>Escribe un programa que calcule la suma de todos los números pares dentro de un rango dado [a, b]. El programa debe solicitar al usuario que ingrese los valores de a y b, y luego imprimir la suma de los números pares en ese rango.</p>
                        <b>Ejemplo:</b>
                        <p>Supongamos que el usuario ingresa a = 1 y b = 10. El programa debe calcular la suma de los números pares dentro de ese rango, que son 2 + 4 + 6 + 8 + 10 = 30, y luego imprimir ese valor.</p>
                        <b>Entrada:</b>
                        <p>Dos números enteros separados por espacio: a y b, donde 1 <= a <= b <= 1000.</p>
                        <b>Salida:</b>
                        <p>Un único número entero que representa la suma de los números pares dentro del rango [a, b].</p>
                        <b>Ejemplo de entrada:</b>
                        <div class="code-output"><code>1 10</code></div>
                        <b>Ejemplo de salida:</b>
                        <div class="code-output"><code>30</code></div>
                        <b>Restricciones:</b>
                        <div class="instructions-pd">
                            <ul>
                                <li>El programa debe calcular la suma de los números pares dentro del rango dado.</li>
                                <li>Debes utilizar estructuras de control como bucles y condicionales para resolver el problema.</li>
                                <li>Evita el uso de funciones o bibliotecas avanzadas que implementen la funcion solicitada.</li>
                            </ul>
                        </div>
                        <b>Notas Adicionales:</b>
                        <div class="instructions-pd">
                            <ul>
                                <li>Asegúrate de leer cuidadosamente la entrada y salida esperadas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row-sample-exercise">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </section>
    </main>
@endsection
