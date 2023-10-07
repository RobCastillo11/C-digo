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
    $sql = "SELECT id, pass FROM usuarios WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre_usuario);
    $stmt->execute();    
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $contrasena_hash = $row['pass'];

        if (password_verify($contrasena, $contrasena_hash)) {
            // Inicio de sesión exitoso
            $_SESSION['user_id'] = $row['id'];

            // Cerrar la declaración $stmt antes de la redirección
            $stmt->close();

            // Consultar el nivel de usuario desde la base de datos
            $sqlNivel = "SELECT nivel FROM usuarios WHERE id = ?";
            $stmtNivel = $conn->prepare($sqlNivel);
            $stmtNivel->bind_param("i", $_SESSION['user_id']);
            $stmtNivel->execute();
            $resultNivel = $stmtNivel->get_result();

            if ($resultNivel->num_rows == 1) {
                $rowNivel = $resultNivel->fetch_assoc();
                $nivelUsuario = $rowNivel['nivel'];

                // Redirigir según el nivel de usuario
                if ($nivelUsuario == "Avanzado") {
                    header("Location: pag1.php");
                } elseif ($nivelUsuario == "Consultor") {
                    header("Location: Consultor/pag1_con.php");
                } else {
                    // Nivel de usuario desconocido o no manejado
                    header("Location: index.php");
                }
                exit();
            } else {
                // No se pudo obtener el nivel de usuario, redirige a una página predeterminada
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
}

$conn->close();
?>
