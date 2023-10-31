<?php
require 'database.php'; // Archivo que contiene la conexión a la base de datos

// Inicia la sesión
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST['usuario']; // Obtén el nombre de usuario desde el formulario
    $contrasena = $_POST['pass']; // Obtén la contraseña desde el formulario

    // Validación y filtrado de datos
    $nombre_usuario = mysqli_real_escape_string($conn, $nombre_usuario);

    // Consulta para obtener el hash de la contraseña y el ID del usuario
    $sql = "SELECT id, pass, nivel FROM usuarios WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre_usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $contrasena_hash = $row['pass'];
        $nivel = $row['nivel'];

        // Verificar la contraseña
        if (password_verify($contrasena, $contrasena_hash)) {
            // Inicio de sesión exitoso
            $_SESSION['user_id'] = $row['id'];

            // Redirige al usuario a la página correspondiente según el nivel
            if ($nivel == "Avanzado") {
                header("Location: pag1.php");
                exit();
            } elseif ($nivel == "Consultor") {
                header("Location: pag2.php");
                exit();
            } else {
                // Redirige al usuario a la página de inicio si el nivel no coincide
                header("Location: index.php");
                exit();
            }
        } else {
            // Contraseña incorrecta
            header("Location: index.php?error=Contraseña incorrecta");
            exit();
        }
    } else {
        // Usuario no encontrado
        header("Location: index.php?error=Usuario no encontrado");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
