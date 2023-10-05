function calcularEdad() {
    var fechaNacimiento = document.getElementById('fn').value;
    var fechaActual = new Date();
    var fechaNac = new Date(fechaNacimiento);
    
    var edad = fechaActual.getFullYear() - fechaNac.getFullYear();
    
    // Verificar si ya pasó el cumpleaños de este año
    if (fechaNac.getMonth() > fechaActual.getMonth() || (fechaNac.getMonth() === fechaActual.getMonth() && fechaNac.getDate() > fechaActual.getDate())) {
        edad--;
    }
    
    document.getElementById('edad').value = edad;
}
