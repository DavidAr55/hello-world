document.addEventListener("DOMContentLoaded", function() {
    
    function typeHelloWorld() {
        var container = document.getElementById("hello-world");
        var text = "Hello World";
        var index = 0;

        var interval = setInterval(function() {
            container.textContent += text[index];
            index++;
            
            if (index >= text.length) {
                clearInterval(interval);
            }
        }, 100);
    }

    typeHelloWorld();
    toggleSelectionSingUp('plan-2');
});


$(document).ready(function () {
    $('.menu-toggle').click(function () {
        $(this).toggleClass('open');
        $('.lateral-menu').toggleClass('menu-open');
        $('.modal-background').fadeToggle(300);
    });

    $(document).click(function(event) {
        
        if (!$(event.target).closest('.lateral-menu').length && !$(event.target).closest('.menu-toggle').length) {
            
            $('.lateral-menu').removeClass('menu-open');
            $('.modal-background').fadeOut(300);
            $('.menu-toggle').removeClass('open');
        }
    });
});

// Inicializa ACE Editor
var editor_header = ace.edit("editor-preview-header");
editor_header.setTheme("ace/theme/monokai");
editor_header.session.setMode("ace/mode/c_cpp");

// Agrega la extensión de autocompletado de C++
ace.require("ace/ext/language_tools");
editor_header.setOptions({
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: true
});

// Establece el contenido inicial
editor_header.setValue(
`#include <iostream>

// Función para calcular la serie de Fibonacci
int fibonacci(int n) {
    if (n <= 1)
        return n;

    return fibonacci(n - 1) + fibonacci(n - 2);
}

int main() {
    int terms = 10; // Imprimir términos de Fibonacci
    std::cout << "Fibonacci series:" << std::endl;
    for (int i = 0; i < terms; ++i) {
        std::cout << fibonacci(i) << " ";
    }
    
    std::cout << std::endl;
    return 0;
}`
);

editor_header.gotoLine(4);

// Ajusta el tamaño de la fuente
editor_header.setFontSize("16px");


// Función para copiar el código al portapapeles
function copyCodeToClipboard() {
    var copyButton = document.getElementById("copyButton");
    var originalIcon = copyButton.innerHTML;
    var originalText = copyButton.innerText;

    var code = editor.getValue();
    navigator.clipboard.writeText(code)
        .then(() => {
            copyButton.innerHTML = '<i class="fas fa-copy"></i> Código copiado';
            copyButton.setAttribute("disabled", true);

            // Después de 2 segundos, vuelve al estado original
            setTimeout(function() {
                copyButton.innerHTML = originalIcon;
                copyButton.removeAttribute("disabled");
            }, 2000);
        })
        .catch(err => {
            console.error('Error al copiar el código:', err);
        });
}

// Agrega un listener al botón "Copiar código"
document.getElementById("copyButton").addEventListener("click", copyCodeToClipboard);


function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
}

function toggleSelectionSingUp(buttonId) {
    var buttons = document.getElementsByClassName("sing-up-checkable-button");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("selected");
        buttons[i].querySelector("h3").classList.remove("selected");
    }
    var selectedButton = document.getElementById(buttonId);
    selectedButton.classList.add("selected");
    selectedButton.querySelector("h3").classList.add("selected");
}

function redirectTo(url) {
    location.href = url;
}


// Inicializa ACE Editor
var editor_practice = ace.edit("editor-preview-practice");
editor_practice.setTheme("ace/theme/monokai");
editor_practice.session.setMode("ace/mode/c_cpp");

// Agrega la extensión de autocompletado de C++
ace.require("ace/ext/language_tools");
editor_practice.setOptions({
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: true
});

// Establece el contenido inicial
editor_practice.setValue(
`#include <iostream>

int main() {
    // Se le solicita al usuario que ingrese el rango [a, b]

    std::cout << “Ingrese el rango [a, b]:”;
    int a, b, sun = 0; 
    std::cin >> a >> b;

    for (int i = a; i <= b; ++i) {
        if (i % 2 == 0) {
            sum += i;
        }
    }

    return 0;
}`
);

editor_practice.gotoLine(4);

// Ajusta el tamaño de la fuente
editor_practice.setFontSize("16px");