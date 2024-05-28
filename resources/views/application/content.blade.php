@extends('layouts.layout')

@section('title','Contenido')

@section('content')

<img src="{{ asset('images/figures/square-1.png') }}" id="bol-1">
<img src="{{ asset('images/figures/square-2.png') }}" id="square-2">

<section class="section-material" id="contenido">
    <div>
        <h2>Aprende mejor con el material didáctico de Hello World</h2>
        <div class="ff-Inter"> 
            <h5>Hello World cuenta con una amplia variedad de contenido para ti, así que no esperes más para empezar a explorar todo el material.</h5>
        </div>
        <h5>Descripción</h5>
        <div class="ff-Inter description-container">
            <h6>En este capítulo explora los inicios para aprender C++. Podrás acceder a toda la teoría básica para desarrollar tu primer programa. No esperes más y comienza a desarrollar tu lógica de programación.</h6>
            <p class="right-align"><i class="fa-regular fa-clock"></i> 4 Horas </p>
        </div>
        <div class="description-rect"></div>
    </div>
</section>

<section class="section-landingpage mg-bottom-75" id="contenido">
    <div class="landing-container-content">
        <div class="landing-content-header">
            <div class="landing-content-header-title">
                <h1 class="ff-Inter mg-bottom-25">Introducción a C++</h1>
                <h5 class="ff-Inter mg-bottom-15">0% Completado</h5>
            </div>
            <div class="landing-content-header-buttons">
                <button class="button-6">Omitir</button>
                <button class="button-5">Ir a practicar</button>
            </div>
        </div>
        <div class="landing-content-body mg-top-25 ">
            <div class="ff-Inter">
                <h5>Tabla de contenido</h5>
                <div class="landing-content-text">
                    <ul class="landing-chapters-list">
                        <li><a href="">Conceptos básicos de programación</a></li>
                        <li><a href="">Algoritmos</a></li>
                        <li><a href="">Estructuras de control</a></li>
                        <li><a href="">Tipos de datos</a></li>
                        <li><a href="">Variables y constantes</a></li>
                        <li><a href="">Operadores</a></li>
                        <li><a href="">Funciones y procedimientos</a></li>
                        <li><a href="">Estructuras de datos básicas</a></li>
                        <li><a href="">Pensamiento algorítmico</a></li>
                        <li><a href="">Principios de diseño de algoritmos eficientes</a></li>
                    </ul>
                </div>
                <div class="landing-contentet-list-bottom">
                    <p>Proporcionado por:</p>
                    <b class="color-2">cppreference</b>
                </div>
            </div>
            <div class="ff-Inter">
                <p><i class="fa-regular fa-clock"></i> 7 minutos de lectura</p>
                <div class="landing-content-text">
                    <h3>Conceptos básicos de programación</h3>
                    <p>La programación es el arte de escribir instrucciones que una computadora puede seguir para realizar una tarea específica. Es como darle un conjunto de pasos a una máquina para que realice una acción deseada. Para entender la lógica detrás de la programación, es importante comprender algunos conceptos básicos:</p>                        
                    <ul>
                        <li><strong>Secuencia de instrucciones:</strong> En programación, las instrucciones se ejecutan en secuencia, una después de la otra. Esto significa que el orden en que escribas las instrucciones es crucial, ya que determina el flujo de ejecución del programa.</li>                            
                        <li><strong>Estructuras de control:</strong> A medida que los programas se vuelven más complejos, es necesario tener la capacidad de tomar decisiones y repetir acciones. Las estructuras de control, como las declaraciones if, else y los bucles (for, while), permiten controlar el flujo de ejecución del programa.</li>                            
                        <li><strong>Abstracción:</strong> La abstracción es un concepto fundamental en programación que implica simplificar la complejidad al ocultar detalles innecesarios y centrarse en los aspectos relevantes para el problema en cuestión. Esto se logra mediante el uso de funciones y procedimientos, que permiten dividir el código en bloques más pequeños y manejables.</li>                            
                        <li><strong>Resolución de problemas:</strong> La programación es, en su núcleo, una forma de resolver problemas. Implica identificar un problema, descomponerlo en pasos más pequeños y luego escribir un conjunto de instrucciones para resolver cada paso de manera sistemática.</li>                            
                        <li><strong>Lenguajes de programación:</strong> Existen varios lenguajes de programación, cada uno con su propia sintaxis y reglas. Algunos ejemplos comunes son Python, Java, C++, JavaScript, entre otros. Cada lenguaje tiene sus propias fortalezas y debilidades, y es importante elegir el más adecuado para el tipo de problema que estás tratando de resolver.</li>
                        <li><strong>Depuración y prueba:</strong> Es inevitable que surjan errores (bugs) en los programas. La depuración es el proceso de encontrar y corregir estos errores. La prueba también es importante para asegurarse de que el programa funcione como se espera en una variedad de situaciones.</li>
                    </ul>
                    <p>En resumen, la programación es un proceso creativo que implica pensar de manera lógica y sistemática para resolver problemas utilizando un lenguaje de programación específico. Es una habilidad valiosa en la era digital, ya que permite automatizar tareas, desarrollar software y crear soluciones innovadoras para una amplia gama de problemas.</p>
                </div>
                <button class="button-6" style="margin-top: 15px; padding: 10px 25px;">Siguiente Capitulo</button>
                <button class="button-5" style="margin-top: 15px; padding: 10px 25px;">Ayuda Del Asistente</button>
            </div>
        </div>
    </div>
</section>

@endsection