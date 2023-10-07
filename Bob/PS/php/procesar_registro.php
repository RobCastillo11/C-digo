<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['pass'];
    $nivel_usuario = $_POST['nivel_usuario'];

    // Validación de datos
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo "Correo electrónico no válido";
        exit();
    } 

    // Hash de la contraseña
    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Inserta los datos en la base de datos, incluyendo el nivel de usuario
    $sql = "INSERT INTO ps1.usuarios (nombre, apellido, email, usuario, pass, nivel) VALUES (?, ?, ?, ?, ?, ?)";
    
    $stmt = null; // Inicializa la variable $stmt
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $nombre, $apellido, $email, $nombre_usuario, $contrasena_hash, $nivel_usuario);
        
        if ($stmt->execute()) {
            // Registro exitoso, redirige al usuario a una página de inicio de sesión exitoso
            echo '<script>';
            echo 'alert("¡Registro exitoso! \n Regresando al inicio...");';
            echo 'setTimeout(function(){ window.location.href = "index.php?registroExitoso=true"; }, 500);'; // Redirigir después de 5 segundos
            echo '</script>';
            exit();
        } else {
            // Error en el registro
            echo "Error en el registro. Por favor, inténtelo nuevamente más tarde.";
        }        
    } catch (Exception $e) {
        // Registra los detalles del error en un registro interno
        error_log("Error en el registro: " . $e->getMessage());
        echo "Ocurrió un error en el servidor. Por favor, inténtelo nuevamente más tarde.";
    }

    if ($stmt !== null) {
        $stmt->close();
    }
}

$conn->close();
?>

