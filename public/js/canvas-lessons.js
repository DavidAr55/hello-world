document.addEventListener("DOMContentLoaded", function () {
    let canvas = document.getElementById("branch-canvas");
    let context = canvas.getContext("2d");

    const container = canvas.parentNode;
    canvas.width = container.clientWidth;
    canvas.height = container.clientHeight;

    class RoundedRect {
        constructor(xPos, yPos, width, height, radius, color, text) {
            this.xPos = xPos + (350);
            this.yPos = yPos;
            this.width = width;
            this.height = height;
            this.radius = radius;
            this.color = color;
            this.text = text;
        }

        draw(context, offsetX, offsetY) {
            // Guardar el estado actual del contexto
            context.save();
            
            // Aplicar sombra al rectángulo principal
            context.shadowOffsetX = 0;
            context.shadowOffsetY = 4;
            context.shadowBlur = 15;
            context.shadowColor = "rgba(0, 0, 0, 0.25)";
            
            context.beginPath();
            
            // Trazar borde del rectángulo redondeado
            context.moveTo(this.xPos - offsetX + this.radius, this.yPos - offsetY);
            context.lineTo(this.xPos - offsetX + this.width - this.radius, this.yPos - offsetY);
            context.quadraticCurveTo(this.xPos - offsetX + this.width, this.yPos - offsetY, this.xPos - offsetX + this.width, this.yPos - offsetY + this.radius);
            context.lineTo(this.xPos - offsetX + this.width, this.yPos - offsetY + this.height - this.radius);
            context.quadraticCurveTo(this.xPos - offsetX + this.width, this.yPos - offsetY + this.height, this.xPos - offsetX + this.width - this.radius, this.yPos - offsetY + this.height);
            context.lineTo(this.xPos - offsetX + this.radius, this.yPos - offsetY + this.height);
            context.quadraticCurveTo(this.xPos - offsetX, this.yPos - offsetY + this.height, this.xPos - offsetX, this.yPos - offsetY + this.height - this.radius);
            context.lineTo(this.xPos - offsetX, this.yPos - offsetY + this.radius);
            context.quadraticCurveTo(this.xPos - offsetX, this.yPos - offsetY, this.xPos - offsetX + this.radius, this.yPos - offsetY);
            context.closePath();
            
            context.strokeStyle = this.color;
            context.lineWidth = 1;
            context.stroke();
            
            // Crear degradado
            var degradado = context.createLinearGradient(this.xPos - offsetX, this.yPos - offsetY, this.xPos - offsetX + this.width, this.yPos - offsetY + this.height);
            degradado.addColorStop(0, "#D24ABE");
            degradado.addColorStop(1, "#6258FE");
            
            // Llenar con degradado
            context.fillStyle = degradado;
            context.fill();
            
            // Restaurar el estado de sombra para dibujar el rectángulo blanco sin sombra
            context.restore();
            
            // Calcular las coordenadas del rectángulo de descripción
            const descRectHeight = 80;
            const descRectRadius = this.radius;
            const descRectX = this.xPos - offsetX;
            const descRectY = this.yPos - offsetY + this.height - descRectHeight;
            const descRectWidth = this.width;
            
            // Dibujar el rectángulo blanco sin sombra
            context.beginPath();
            context.moveTo(descRectX + descRectRadius, descRectY + descRectHeight);
            context.lineTo(descRectX + descRectWidth - descRectRadius, descRectY + descRectHeight);
            context.quadraticCurveTo(descRectX + descRectWidth, descRectY + descRectHeight, descRectX + descRectWidth, descRectY + descRectHeight - descRectRadius);
            context.lineTo(descRectX + descRectWidth, descRectY);
            context.lineTo(descRectX, descRectY);
            context.lineTo(descRectX, descRectY + descRectHeight - descRectRadius);
            context.quadraticCurveTo(descRectX, descRectY + descRectHeight, descRectX + descRectRadius, descRectY + descRectHeight);
            context.closePath();
            
            context.fillStyle = "#FFFFFF";
            context.fill();
            context.strokeStyle = this.color;
            context.lineWidth = 1;
            context.stroke();
            
            // Calcular el ancho del texto y ajustar su posición para que no se salga del contenedor
            const textWidth = context.measureText(this.text).width;
            const maxTextWidth = this.width - 20; // 20px de espacio en cada lado
            let adjustedText = this.text;
            if (textWidth > maxTextWidth) {
                // Truncar el texto si es demasiado ancho
                adjustedText = this.text.substring(0, Math.floor((maxTextWidth / textWidth) * this.text.length)) + '...';
            }
        
            // Dibujar texto
            context.fillStyle = this.color;
            context.textAlign = "center";
            context.textBaseline = "middle";
            context.font = "20px 'Formula 1', Arial";
            context.fillText(adjustedText, this.xPos - offsetX + this.width / 2, this.yPos - offsetY + this.height / 2);
        }               
    }

    let counter = 0;
    let allRects = [];
    const containerNames = ["Introducción a C++", "Entrada y salida básica (cin y cout)", "Variables y tipos de datos", "Escribir tu nombre", "Area de un triangulo", "Pares e impares"];

    for (let i = 0; i < 6; i++) {
        let xCord = 350 * i;
        let yCord = 250;
        let myRect = new RoundedRect(xCord, yCord, 300, 240, 15, "#EEEDED", containerNames[i]);
        allRects.push(myRect);
        counter++;
    }

    // Variables para manejar el arrastre con el mouse
    let isDragging = false;
    let lastX = 0;
    let lastY = 0;
    let offsetX = 0;
    let offsetY = 0;

    // Dibujar contenido en el canvas
    function draw() {
        context.clearRect(0, 0, canvas.width, canvas.height);

        // Dibujar todos los rectángulos
        allRects.forEach(rect => rect.draw(context, offsetX, offsetY));
    }

    // Función para manejar el inicio del arrastre con el mouse
    function startDragging(e) {
        isDragging = true;
        lastX = e.clientX;
        lastY = e.clientY;
    }

    // Función para manejar el arrastre con el mouse
    function drag(e) {
        if (isDragging) {
            const deltaX = e.clientX - lastX;
            const deltaY = e.clientY - lastY;

            offsetX -= deltaX;
            offsetY -= deltaY;

            lastX = e.clientX;
            lastY = e.clientY;

            draw();
        }
    }

    // Función para manejar el final del arrastre con el mouse
    function stopDragging() {
        isDragging = false;
    }

    // Eventos de mouse para el arrastre
    canvas.addEventListener("mousedown", startDragging);
    canvas.addEventListener("mousemove", drag);
    canvas.addEventListener("mouseup", stopDragging);
    canvas.addEventListener("mouseleave", stopDragging);

    // Dibujar la primera vez
    draw();
});
