<?php
class UsuarioVista {
    public function mostrarUsuarios($usuarios) {
        echo "<h1>Lista de Usuarios:</h1>";
        foreach ($usuarios as $usuario) {
            echo "Nombre: " . $usuario['nombre'] . "<br>";
            echo "Email: " . $usuario['email'] . "<br><br>";
        }
    }
}
?>
