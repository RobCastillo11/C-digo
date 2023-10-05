// script.js - JavaScript para generar el PDF

// Espera a que se cargue el DOM antes de ejecutar el código
document.addEventListener("DOMContentLoaded", function () {
    // Agrega un evento de clic al botón "Crear PDF"
    document.getElementById("crearPdf").addEventListener("click", function () {
        // Obtiene los valores del formulario
        var nombre = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellido").value;
        var mensaje = document.getElementById("mensaje").value;

        // Llama a la función para generar el PDF con los datos del formulario
        generarPDF(nombre, apellido, mensaje);
    });
});

// Función para generar el PDF con los datos del formulario
function generarPDF(nombre, apellido, mensaje) {
    // Crea una instancia de jsPDF
    var doc = new jsPDF();
    
    // Establece el estilo del texto
    doc.setFont("helvetica");
    doc.setFontSize(12);
    doc.setTextColor(0, 0, 0); // Color del texto en negro

    // Agrega los datos del formulario al PDF
    doc.text(20, 20, "Nombre: " + nombre);
    doc.line(20, 25, 190, 25); // Línea horizontal para separación
    doc.text(20, 35, "Apellido: " + apellido);
    doc.line(20, 40, 190, 40); // Línea horizontal para separación
    doc.text(20, 50, "Mensaje:");
    doc.text(20, 55, mensaje);

    // Agrega un cuadro de color de fondo
    doc.setFillColor(255, 0, 0); // Fondo rojo
    doc.rect(15, 48, 120, 10, "F"); // Cuadro de fondo rojo

    // Guarda el PDF con un nombre específico
    doc.save("DatosGenerales.pdf");
}

