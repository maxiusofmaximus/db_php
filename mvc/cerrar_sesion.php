<?php
// Iniciar la sesión
session_start();

// destruye las variables de sesión
$_SESSION = array();

session_destroy();

// Redirigir al usuario a la página de inicio cuando se ceirra la sesion
header("Location: index.php");
exit;
?>