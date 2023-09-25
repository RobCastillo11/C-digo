<?php
session_start(); // Inicia la sesión

// Destruye todas las variables de sesión
session_unset();
session_destroy();

// Redirige al usuario a la página de inicio de sesión
header("Location: index.php");
exit();
?>
