<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    // Si el usuario no ha iniciado sesión, con los datos él
    header("Location: index.php");
    exit;
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>
<body>

<h2>Bienvenido, <?php echo $usuario; ?></h2>
<a href="cerrar_sesion.php">Cerrar sesión</a>

</body>
</html>