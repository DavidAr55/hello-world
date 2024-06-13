class Graph {
    constructor() {
        this.adjacencyList = {};
        this.positions = {};
    }

    addVertex(vertex, type, level, title, description, x = 0, y = 0) {
        if (!this.adjacencyList[vertex]) {
            this.adjacencyList[vertex] = [];
            this.positions[vertex] = { x, y, type, level, title, description };
        }
    }

    addEdge(vertex, ...nodes) {
        if (!this.adjacencyList[vertex]) {
            this.addVertex(vertex);
        }
        for (let node of nodes) {
            if (node === null) continue;
            if (!this.adjacencyList[node]) {
                this.addVertex(node);
            }
            if (!this.adjacencyList[vertex].includes(node)) {
                this.adjacencyList[vertex].push(node);
                this.adjacencyList[node].push(vertex);
            }
        }
    }

    showGraph() {
        for (let vertex in this.adjacencyList) {
            console.log(`${vertex} -> ${this.adjacencyList[vertex].join(', ')}`);
        }
    }
}

class NodeRoundedRect {
    constructor(xPos, yPos, width, height, radius, type, level, title, description, image) {
        this.xPos = xPos;
        this.yPos = yPos;
        this.width = width;
        this.height = height;
        this.radius = radius;
        this.border_color = "#EEEDED";
        this.linear_gradient = [];
        this.type = type;
        this.level = level;
        this.title = title;
        this.description = description;
        this.image = image;
    }

    handleClick() {
        if (this.type === "exercise") {
            window.location.href = "/ejercicio"; // Redirección a la vista de ejercicio
        } else if (this.type === "theory") {
            window.location.href = "/contenido"; // Redirección a la vista de contenido
        }
    }

    draw(ctx, offsetX, offsetY) {
        ctx.save();

        this.linear_gradient = this.type == "exercise" ? ["#D24ABE", "#6258FE"] : ["#62C7F2", "#5F58FF"];

        ctx.shadowOffsetX = 0;
        ctx.shadowOffsetY = 4;
        ctx.shadowBlur = 15;
        ctx.shadowColor = "rgba(0, 0, 0, 0.25)";

        ctx.beginPath();
        ctx.moveTo(this.xPos - offsetX + this.radius, this.yPos - offsetY);
        ctx.lineTo(this.xPos - offsetX + this.width - this.radius, this.yPos - offsetY);
        ctx.quadraticCurveTo(this.xPos - offsetX + this.width, this.yPos - offsetY, this.xPos - offsetX + this.width, this.yPos - offsetY + this.radius);
        ctx.lineTo(this.xPos - offsetX + this.width, this.yPos - offsetY + this.height - this.radius);
        ctx.quadraticCurveTo(this.xPos - offsetX + this.width, this.yPos - offsetY + this.height, this.xPos - offsetX + this.width - this.radius, this.yPos - offsetY + this.height);
        ctx.lineTo(this.xPos - offsetX + this.radius, this.yPos - offsetY + this.height);
        ctx.quadraticCurveTo(this.xPos - offsetX, this.yPos - offsetY + this.height, this.xPos - offsetX, this.yPos - offsetY + this.height - this.radius);
        ctx.lineTo(this.xPos - offsetX, this.yPos - offsetY + this.radius);
        ctx.quadraticCurveTo(this.xPos - offsetX, this.yPos - offsetY, this.xPos - offsetX + this.radius, this.yPos - offsetY);
        ctx.closePath();

        ctx.strokeStyle = this.border_color;
        ctx.lineWidth = 1;
        ctx.stroke();

        var gradient = ctx.createLinearGradient(this.xPos - offsetX, this.yPos - offsetY, this.xPos - offsetX + this.width, this.yPos - offsetY + this.height);
        gradient.addColorStop(0, this.linear_gradient[0]);
        gradient.addColorStop(1, this.linear_gradient[1]);

        ctx.fillStyle = gradient;
        ctx.fill();

        if (this.image.complete) {
            ctx.drawImage(this.image, (this.xPos - offsetX + 7.5), (this.yPos - offsetY + 5), 180, 154);
        } else {
            this.image.onload = () => {
                ctx.drawImage(this.image, (this.xPos - offsetX + 7.5), (this.yPos - offsetY + 5), 180, 154);
            };
        }

        const descRectHeight = 80;
        const descRectRadius = this.radius;
        const descRectX = this.xPos - offsetX;
        const descRectY = this.yPos - offsetY + this.height - descRectHeight;
        const descRectWidth = this.width;

        ctx.beginPath();
        ctx.moveTo(descRectX + descRectRadius, descRectY + descRectHeight);
        ctx.lineTo(descRectX + descRectWidth - descRectRadius, descRectY + descRectHeight);
        ctx.quadraticCurveTo(descRectX + descRectWidth, descRectY + descRectHeight, descRectX + descRectWidth, descRectY + descRectHeight - descRectRadius);
        ctx.lineTo(descRectX + descRectWidth, descRectY);
        ctx.lineTo(descRectX, descRectY);
        ctx.lineTo(descRectX, descRectY + descRectHeight - descRectRadius);
        ctx.quadraticCurveTo(descRectX, descRectY + descRectHeight, descRectX + descRectRadius, descRectY + descRectHeight);
        ctx.closePath();

        ctx.fillStyle = "#FFFFFF";
        ctx.fill();
        ctx.strokeStyle = this.border_color;
        ctx.lineWidth = 1;
        ctx.stroke();

        const lines = this.level.split('\n');
        const lineHeight = 20;
        const lineSpacing = 10;
        const totalLineHeight = lineHeight + lineSpacing;

        ctx.fillStyle = this.border_color;
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        ctx.font = "20px 'Formula 1', Arial";

        lines.forEach((line, index) => {
            let color;
            if (line.includes("Básico"))          color = "#3FD630";
            else if (line.includes("Intermedio")) color = "#92D630";
            else if (line.includes("Avanzado"))   color = "#D6C730";
            else if (line.includes("Experto"))    color = "#D67430";
            else if (line.includes("Hacker"))     color = "#D63092";

            ctx.fillStyle = color;
            ctx.fillText(
                line,
                this.xPos - offsetX + (this.width / 2) + 80,
                this.yPos - offsetY + (this.height / 2) - 5 + (index - (lines.length - 1) / 2) * totalLineHeight
            );
        });

        // Show title and description
        ctx.fillStyle = "#000000";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        ctx.font = "bold 16px Arial";
        ctx.fillText(this.title, this.xPos - offsetX + this.width / 2, this.yPos - offsetY + this.height - 60);
        ctx.font = "14px Arial";
        ctx.fillText(this.description, this.xPos - offsetX + this.width / 2, this.yPos - offsetY + this.height - 40);

        ctx.restore();
    }
}

function createGraph() {
    const myGraph = new Graph();

    // Agregamos nodos con identificadores únicos pero con textos que pueden repetirse
    let title = "Título del nodo";
    let description = "Descripción del nodo";

    myGraph.addVertex("A", "theory", "Nivel\nBásico", title, description, 400, 250);
    myGraph.addVertex("B", "exercise", "Nivel\nBásico", title, description, 800, -150);
    myGraph.addVertex("C", "theory", "Nivel\nIntermedio", title, description, 800, 250);
    myGraph.addVertex("D", "exercise", "Nivel\nAvanzado", title, description, 800, 650);
    myGraph.addVertex("E", "exercise", "Nivel\nIntermedio", title, description, 1200, -150);
    myGraph.addVertex("F", "exercise", "Nivel\nAvanzado", title, description, 1300, 250);
    myGraph.addVertex("G", "exercise", "Nivel\nExperto", title, description, 1700, 250);
    myGraph.addVertex("H", "exercise", "Nivel\nHacker", title, description, 2200, -150);
    
    myGraph.addVertex("I", "theory", "Nivel\nBásico", title, description, 1200, 650);

    myGraph.addEdge("A", "B", "C", "D");
    myGraph.addEdge("B", "A");
    myGraph.addEdge("C", "A");
    myGraph.addEdge("D", "A");
    myGraph.addEdge("E", "C", "H");
    myGraph.addEdge("F", "C");
    myGraph.addEdge("G", "F");
    myGraph.addEdge("H", "G");
    myGraph.addEdge("I", null);

    console.log("Grafo:");
    myGraph.showGraph();

    return myGraph;
}

function drawGraph(graph, ctx, offsetX, offsetY, image) {
    for (let vertex in graph.adjacencyList) {
        for (let neighbor of graph.adjacencyList[vertex]) {
            const start = graph.positions[vertex];
            const end = graph.positions[neighbor];
            ctx.beginPath();
            ctx.moveTo((start.x + 150) - offsetX, (start.y + 120) - offsetY);
            ctx.lineTo((end.x + 150) - offsetX, (end.y + 120) - offsetY);
            ctx.lineWidth = 7.5;
            ctx.strokeStyle = "#E61A4F";
            ctx.stroke();
        }
    }

    for (let vertex in graph.positions) {
        const pos = graph.positions[vertex];
        const rect = new NodeRoundedRect(pos.x, pos.y, 300, 240, 15, pos.type, pos.level, pos.title, pos.description, image);
        rect.draw(ctx, offsetX, offsetY);
    }
}

function resizeCanvas(canvas) {
    const container = canvas.parentNode;
    canvas.width = container.clientWidth;
    canvas.height = container.clientHeight;
}

const canvas = document.getElementById('branch-canvas');
const ctx = canvas.getContext('2d');

const image = new Image();
image.src = "./images/assets/exercise-cpp.png";

image.onload = () => {
    const myGraph = createGraph();

    let isDragging = false;
    let lastX = 0;
    let lastY = 0;
    let offsetX = 0;
    let offsetY = 0;

    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawGraph(myGraph, ctx, offsetX, offsetY, image);
    }

    function startDragging(e) {
        isDragging = true;
        lastX = e.clientX;
        lastY = e.clientY;
    }

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

    function stopDragging() {
        isDragging = false;
    }

    canvas.addEventListener("mousedown", startDragging);
    canvas.addEventListener("mousemove", drag);
    canvas.addEventListener("mouseup", stopDragging);
    canvas.addEventListener("mouseleave", stopDragging);

    window.addEventListener('load', () => {
        resizeCanvas(canvas);
        draw();
    });

    window.addEventListener('resize', () => {
        resizeCanvas(canvas);
        draw();
    });

    draw();
};