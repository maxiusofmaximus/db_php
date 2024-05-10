<?php
require_once('controlador/UsuarioControlador.php');
session_start();

if(isset($_SESSION['usuario'])) {
    // Si el usuario ya inició sesión, redirigirlo a la página inicial
    header("Location: Bienvenida.php"); // pagina de redir
    exit;
}

if(isset($_POST['submit'])) {
    // Validar los datos del formulario
    $usuario_valido = $_POST['username'];
    $contrasena_valida = $_POST['password'];
    $email_valido = $_POST['email'];

    if($_POST['username'] == $usuario_valido && $_POST['password'] == $contrasena_valida && $_POST['email'] == $email_valido) {
        // Iniciar sesión y redirigir al usuario a la página de bienvenida
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: bienvenida.php");
        exit;
    } else {
        $mensaje = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Iniciar sesión</h2>
            <?php if(isset($mensaje)) { echo "<p>$mensaje</p>"; } ?>
            <form method="post" action="index.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de usuario:</label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        class="form-control"
                        placeholder="Ingrese su nombre de usuario"
                        aria-describedby="helpId"
                    />
                    <small id="helpId" class="text-muted">Ingrese un nombre de usuario válido</small>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input
                        type="text"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Ingrese su contraseña"
                        aria-describedby="helpId"
                    />
                    <small id="helpId" class="text-muted">Ingrese una contraseña válida</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        aria-describedby="emailHelpId"
                        placeholder="abc@mail.com"
                    />
                    <small id="emailHelpId" class="form-text text-muted"
                        >Ingrese un e-mail válido</small
                    >
                </div>
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Ingresar
                </button>
                
            </form>
        </div>
    </div>
</body>
</html>