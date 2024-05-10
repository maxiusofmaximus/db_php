<?php
require_once(__DIR__ . '/../modelo/UsuarioModelo.php');
require_once(__DIR__ . '/../vista/UsuarioVista.php');


class UsuarioControlador {
    private $modelo;
    private $vista;

    public function __construct() {
        $this->modelo = new UsuarioModelo();
        $this->vista = new UsuarioVista();
    }

    public function agregarUsuario($nombre, $email) {
        $this->modelo->agregarUsuario($nombre, $email);
    }

    public function mostrarUsuarios() {
        $usuarios = $this->modelo->obtenerUsuarios();
        $this->vista->mostrarUsuarios($usuarios);
    }
}
?>
