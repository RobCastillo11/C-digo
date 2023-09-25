<?php
require 'database.php';

$update_stmt = null; // Declarar la variable antes de los bloques condicionales

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtén los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $token = $_POST['token'];

    // Verifica si las contraseñas coinciden
    if ($password === $confirm_password) {
        // Verifica el token y su tiempo de vencimiento
        $query = "SELECT * FROM usuarios WHERE email = ? AND reset_token = ? AND reset_token_expiration > NOW()";
        $stmt = mysqli_prepare($conn, $query);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $token);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if ($result && mysqli_num_rows($result) == 1) {
                // Hash de la contraseña (opcional pero se recomienda para mayor seguridad)
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Actualiza la contraseña en la base de datos y elimina el token
                $update_query = "UPDATE usuarios SET pass = ?, reset_token = NULL, reset_token_expiration = NULL WHERE email = ?";
                $update_stmt = mysqli_prepare($conn, $update_query);

                if ($update_stmt) {
                    mysqli_stmt_bind_param($update_stmt, "ss", $hashed_password, $email);
                    if (mysqli_stmt_execute($update_stmt)) {
                        // Contraseña actualizada con éxito
                        header("Location: index.php");
                        exit();
                    } else {
                        $error_message = "Error al actualizar la contraseña: " . mysqli_error($conn);
                    }
                } else {
                    $error_message = "Error al preparar la consulta de actualización: " . mysqli_error($conn);
                }
            } else {
                // Redirige a index.php con un mensaje de enlace caducado
                $error_message = "El enlance ha caducado: " . mysqli_error($conn);

                echo '<script>';
                echo 'alert("'.$error_message.'");';
                echo 'setTimeout(function(){ window.location.href = "index.php?error=caducado"; }, 500);'; // Redirigir después de 5 segundos
                echo '</script>';

                exit();
            }
        } else {
            $error_message = "Error al preparar la consulta: " . mysqli_error($conn);
        }
        
        mysqli_stmt_close($stmt);
    } else {
        $error_message = "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";
    }
    
    // Cerrar $update_stmt si se ha inicializado correctamente
    if ($update_stmt) {
        mysqli_stmt_close($update_stmt);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="/PS/estilos/stylesP.css">
</head>
<body>
    <img src="/PS/imagenes/guardia_civil.png" class="logo-top-left" alt="Logo 1">
    <img src="/PS/imagenes/secretaria_de_suguridad.png" class="logo-top-right" alt="Logo 2">

    <div class="container">
        <h1>Restablecer Contraseña</h1>
        <?php if (isset($error_message)) : ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <?php
        if (isset($_GET['error']) && $_GET['error'] === 'caducado') {
            echo '<p class="error">El enlace ha caducado o no es válido.</p>';
        }
        ?>
        <form method="post" action="">
            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
            <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
            <label for="password">Nueva Contraseña:</label><br>
            <input type="password" name="password" placeholder="Nueva Contraseña" required ><br><br>
            <label for="confirm_password">Confirmar Contraseña:</label><br>
            <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required><br><br>
            <input type="submit" value="Restablecer Contraseña">
        </form>
    </div>

    <img src="/PS/imagenes/holograma.png" class="logo-bottom" alt="Logo 3">
</body>
</html>
