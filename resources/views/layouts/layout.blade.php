<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Agregar Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Agregar JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Agregar Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Agregar SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"></script>

    <!-- Agrega el JS y el CSS de ACE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>

    <!-- Agregar Estilo CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/david.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hottaco.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rodri.css') }}">
</head>
<body>
    <!-- Navbar Section -->
    <div class="modal-background"></div>

    <div class="lateral-menu">
        <div class="lateral-menu-container">
            <ul>
                <li><a href="javascript:scrollToSection('inicio')"    >Inicio</a></li>
                <li><a href="javascript:scrollToSection('explora')"   >Explora</a></li>
                <li><a href="javascript:scrollToSection('practica')"  >Practica</a></li>
                <li><a href="javascript:scrollToSection('contenido')" >Contenido</a></li> 
                <li><a href="javascript:scrollToSection('planes')"    >Planes</a></li>      
            </ul>
            <ul>
                <li><button class="button-2" onclick="redirectTo('registro')" style="margin-bottom: 0px;" style="margin: 15px 0 15px 0;">Iniciar sesión</button></li>
                <li><button class="button-2" onclick="redirectTo('iniciar-sesion')" style="margin-top: 0px;" style="margin: 15px 0 15px 0;"><i class="fa-solid fa-right-to-bracket"></i> Registrarse</button></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Documentación</a></li>
                <li><a href="#">Auyda</a></li>
            </ul>
        </div>
    </div>

    <nav>
        <div class="nav-info-top">
            <ul>
                <li><button class="button-4" onclick="redirectTo('registro')"><i class="fa-solid fa-right-to-bracket"></i> Registrarse</button></li>
                <li><button class="button-1" onclick="redirectTo('iniciar-sesion')">Iniciar sesión</button></li>
                <li style="font-size: 26px; font-weight: normal; margin-top: -1px;">|</li>
                <li><a href="#">Ayuda</a></li>
                <li><a href="#">Documentación</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            <i class="fa-solid fa-caret-up triangle"></i>
        </div>
        <div class="nav-info-bottom">
            <div class="info-bottom">
                <div class="lateral-menu-button">
                    <div class="menu-toggle first">
                        <i></i>
                    </div>
                </div>
                <div class="logo-container">
                    <a href="{{ url('/inicio') }}">
                        <div class="logo-container-span">
                            <img src="{{ asset('images/Hello-World-Logo.png') }}" class="logo-nav-bar" alt="Hello World Logo">
                            <span id="hello-world"></span>
                        </div>
                    </a>
                </div>
                <div class="bottom-buttons">
                    <ul>
                        <li><a href="javascript:scrollToSection('inicio')"    >Inicio</a></li>
                        <li><a href="javascript:scrollToSection('explora')"   >Explora</a></li>
                        <li><a href="javascript:scrollToSection('practica')"  >Practica</a></li>
                        <li><a href="javascript:scrollToSection('contenido')" >Contenido</a></li> 
                        <li><a href="javascript:scrollToSection('planes')"    >Planes</a></li>     
                    </ul>
                </div>
            </div>
        </div>        
    </nav>
    <div class="separador-nav"></div>

    <!-- Content Section -->
    @yield('content')

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3 style="line-height: 40px;">Contacto</h3>
                <p>¿Tines preguntas?</p>
                <button id="contact-button" class="button-3" style="margin: 45px 0; height: 58px;">Formulario de contacto</button>
            </div>
            <div class="footer-column">
                <h3 style="line-height: 40px;">Redes Sociales</h3>
                <p>Ponte en contacto con nosotros a través de las redes sociales.</p>
                <div class="row-social">
                    <button class="button-3 nb" style="margin: 20px 0;" onclick="redirectToBlank('https://www.facebook.com/profile.php?id=61559612453689')"><i class="fa-brands fa-facebook-f"></i></button>
                    <button class="button-3 nb" style="margin: 20px 0;" onclick="redirectToBlank('https://www.instagram.com/hello_w0rld_dev/')"><i class="fa-brands fa-instagram"></i></button>
                    <button class="button-3 nb" style="margin: 20px 0;" onclick="redirectToBlank('https://twitter.com/HelloWorldMx')"><i class="fa-brands fa-twitter"></i></button>
                    <button class="button-3 nb" style="margin: 20px 0;" onclick="redirectToBlank('https://www.youtube.com/channel/UCeT5varh-07VRRhHi4MIx2g')"><i class="fa-brands fa-youtube"></i></button>
                    <button class="button-3 nb" style="margin: 20px 0;" onclick="redirectToBlank('https://patreon.com/HelloWorld346?utm_medium=unknown&utm_source=join_link&utm_campaign=creatorshare_creator&utm_content=copyLink')"><i class="fa-brands fa-patreon"></i></button>
                </div>
            </div>
            <div class="footer-column f-del"></div>
        </div>
        <div class="footer-container">
            <div class="footer-column">
                <h3 style="line-height: 40px;">Empresa</h3>
                <ul style="padding: 0;">
                    <li><a href="#">Hello World</a></li>
                    <li><a href="#">Mision, Visión y Valores</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3 style="line-height: 40px;">Aviso de Privacidad</h3>
                <a href="#">Leer aviso de privasidad</a>
            </div>
            <div class="footer-column f-del"></div>
        </div>
    </footer>    
      
    <!-- Scripts Section -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/user-dashboard.js') }}"></script>
    <script src="{{ asset('js/canvas-lessons.js') }}"></script>
    <script src="{{ asset('js/swal2-alerts.js') }}"></script>
    <script src="{{ asset('js/david.js') }}"></script>
    <script src="{{ asset('js/hottaco.js') }}"></script>
    <script src="{{ asset('js/rodri.js') }}"></script>

    <!-- Scripts de Bootstap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Scripts de Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>