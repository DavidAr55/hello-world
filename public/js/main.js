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
var editor = ace.edit("editor");
editor.setTheme("ace/theme/monokai");
editor.session.setMode("ace/mode/c_cpp");

// Agrega la extensión de autocompletado de C++
ace.require("ace/ext/language_tools");
editor.setOptions({
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: true
});

// Establece el contenido inicial
editor.setValue(
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

editor.gotoLine(4);

// Ajusta el tamaño de la fuente
editor.setFontSize("16px");


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