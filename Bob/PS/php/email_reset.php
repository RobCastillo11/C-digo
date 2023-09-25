<?php
require 'database.php';

$correo = $_POST['txtcorreo'];

$queryusuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$correo'");
$nr = mysqli_num_rows($queryusuario);

if ($nr == 1) {
    // Generar un token único
    $reset_token = bin2hex(random_bytes(32)); // Cambia la longitud según tus necesidades

    // Calcular la fecha de vencimiento del token (por ejemplo, 1 hora desde ahora)
    $token_expiration = date('Y-m-d H:i:s', strtotime('+1 minute'));

    // Almacena el token y la marca de tiempo en la base de datos
    $update_query = "UPDATE usuarios SET reset_token = '$reset_token', reset_token_expiration = '$token_expiration' WHERE email = '$correo'";
    mysqli_query($conn, $update_query);

    // Envia el correo con el enlace que contiene el token
    $titulo = "Recuperar Contraseña";
    $nombre_empresa = "Nombre de Tu Empresa"; // Reemplaza con el nombre de tu empresa
    $nombre_remitente = "Equipo de $nombre_empresa";

    $mensaje = "<html>
    <head>
        <title>Recuperar Contraseña</title>
    </head>
    <body>
        <p>Estimado usuario, hemos recibido una solicitud para restablecer la contraseña de su cuenta. Por favor, haga clic en el siguiente enlace para cambiar su contraseña:</p>
        <p><a href='http://localhost/PS/php/reset_form.php?email=$correo&token=$reset_token'>Restablecer Contraseña</a></p>
        <p>Si no solicitó este cambio, puede ignorar este correo.</p>
        <br>
        <p>Atentamente,</p>
        <p>$nombre_remitente</p>
    </body>
    </html>";

    $cabeceras = "From: pruebacorreos465@gmail.com\r\n";
    $cabeceras .= "Reply-To: pruebacorreos465@gmail.com\r\n";
    $cabeceras .= "MIME-Version: 1.0\r\n";
    $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($correo, $titulo, $mensaje, $cabeceras)) {
        echo "<script>alert('Se ha enviado un enlace para restablecer la contraseña a su correo.'); window.location = 'index.php';</script>";
    } else {
        echo "<script>alert('Error al enviar el correo para restablecer la contraseña.'); window.location= 'index.php' </script>";
    }
} else {
    echo "<script>alert('Este correo no existe'); window.location= 'index.php' </script>";
}
?>
