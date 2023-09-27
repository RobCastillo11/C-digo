<?php 
require 'database.php';

// Verifica si el parámetro 'registroExitoso' está presente en la URL y es igual a 'true'
if (isset($_GET['registroExitoso']) && $_GET['registroExitoso'] == 'true') {
    $registroExitoso = true;
} else {
    $registroExitoso = false;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../estilos/styles.css">
</head>
<body>
  
<img src="../imagenes/guardia_civil.png" class="logo-top-left" alt="Logo 1">
  <img src="../imagenes/secretaria_de_suguridad.png" class="logo-top-right" alt="Logo 2">

  <div id="login-button">
    <img src="../imagenes/login1.png">
  </div>

  <!-- Log in-->
  <div id="container">
    <h1>¡Bienvenido!</h1>
    <span class="close-btn"> 
        <img src="../imagenes/x.png">
    </span>
    <form id="login-form" method="POST" action="index.php">
    <input type="text" name="usuario" placeholder="usuario">
    <input type="password" name="pass" placeholder="Password">
    <button type="submit">Iniciar sesión</button>
    <div id="remember-container">
        <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked" />
        <span id="remember">Recordarme</span>
        <span id="forgotten">¿Olvisdate tu contraseña?</span>
        <span id="register">Registrarte</span>
    </div>
</form>
</div>

<!--Registro de usuario-->
  <div id="register-container">
    <h1>Registro</h1>
    <?php if ($registroExitoso) { ?>
      <div id="registro-exitoso" style="color: green;">
        ¡Registro exitoso! Puedes iniciar sesión ahora.
      </div>
    <?php } ?>
    <span class="close-btn">
      <img src="../imagenes/x.png">
    </span>
    <form method="POST" action="procesar_registro.php">
      <input type="text" name="nombre" placeholder="Nombre">
      <input type="text" name="apellido" placeholder="Apellido">
      <input type="email" name="email" placeholder="E-mail">
      <input type="text" name="nombre_usuario" placeholder="Usuario">
      <input type="password" name="pass" placeholder="Password">
      <button type="submit">Registrarse</button>
    </form>
  </div>

 <!-- Recuperar contraseña -->
<div id="forgotten-container" class="caja_popup" id="formrecuperar">
  <form action="email_reset.php" class="contenedor_popup" method="POST">
    <h1>Restablecer contraseña</h1>
    <span class="close-btn" onclick="cancelarform()">
      <img src="../imagenes/x.png">
    </span>

    <table>
      <tr>
        <td><b>&#128231; Correo</b></td>
        <td><input type="email" name="txtcorreo" placeholder="E-mail" required class="cajaentradatexto"></td>
      </tr>
      <tr>  
        <td colspan="2">
          <button type="button" onclick="cancelarform()" class="txtrecuperar">Cancelar</button>
          <input class="txtrecuperar" type="submit" name="btnrecuperar" value="Enviar" onClick="return confirm('¿Deseas enviar tu contraseña a tu correo?');">
        </td>
      </tr>
    </table>
  </form>
</div>

  <script>
  window.addEventListener('DOMContentLoaded', (event) => {
    // Verifica si la variable de registroExitoso está configurada como true
    <?php if ($registroExitoso) { ?>
      const registroExitosoDiv = document.getElementById('registro-exitoso');
      if (registroExitosoDiv) {
        registroExitosoDiv.style.display = 'block';
      }
    <?php } ?>
  });
</script>
  
  <img src="../imagenes/holograma.png" class="logo-bottom" alt="Logo 3">
  <script src="../js/cdnjs.cloudflare.com_ajax_libs_gsap_3.9.1_gsap.min.js"></script>
  <script src="../js/code.jquery.com_jquery-3.6.0.min.js"></script>
  <script src="../js/ind.js"></script>

</body>
</html>




