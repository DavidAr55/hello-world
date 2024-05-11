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

document.addEventListener('DOMContentLoaded', function() {
    var inputs = document.querySelectorAll('.input-recovery');
    
    inputs.forEach(function(input, index) {
        input.addEventListener('input', function(event) {
            var inputValue = event.target.value;
            // Verificar si se ha ingresado un dígito
            if (inputValue.length > 0) {
                // Si se ha ingresado un dígito y es el último campo de entrada
                if (index === inputs.length - 1) {
                    // Borrar el contenido del campo y mantener solo el último carácter
                    event.target.value = inputValue[inputValue.length - 1];
                } else {
                    // Mover el enfoque al siguiente campo de entrada
                    inputs[index + 1].focus();
                }
            }
        });
    });

    // Manejar el evento pegar en el documento
    document.addEventListener('paste', function(event) {
        // Obtener el texto pegado
        var pastedText = (event.clipboardData || window.clipboardData).getData('text');
        // Dividir el texto en caracteres individuales
        var characters = pastedText.split('');
        // Asignar cada carácter a un campo de entrada
        inputs.forEach(function(input, index) {
            if (characters[index]) {
                input.value = characters[index];
            }
        });
        // Detener el comportamiento predeterminado de pegado
        event.preventDefault();
    });
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
function copyCodeToClipboard(editorName) {
    var copyButton = document.getElementById("copyButton-" + editorName);
    var originalIcon = copyButton.innerHTML;
    var originalText = copyButton.innerText;

    var code = window["editor_" + editorName].getValue();
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

// Agrega un listener al botón "Copiar código" para el editor_header
document.getElementById("copyButton-header").addEventListener("click", function() {
    copyCodeToClipboard("header");
});

// Agrega un listener al botón "Copiar código" para el editor_sample
document.getElementById("copyButton-sample").addEventListener("click", function() {
    copyCodeToClipboard("sample");
});



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
var editor_sample = ace.edit("editor-preview-practice");
editor_sample.setTheme("ace/theme/monokai");
editor_sample.session.setMode("ace/mode/c_cpp");

// Agrega la extensión de autocompletado de C++
ace.require("ace/ext/language_tools");
editor_sample.setOptions({
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: true
});

// Establece el contenido inicial
editor_sample.setValue(
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

editor_sample.gotoLine(4);

// Ajusta el tamaño de la fuente
editor_sample.setFontSize("16px");

