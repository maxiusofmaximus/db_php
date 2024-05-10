<?php
class UsuarioModelo {
    private $usuarios = [];

    public function agregarUsuario($nombre, $email) {
        $this->usuarios[] = ['nombre' => $nombre, 'email' => $email];
    }

    public function obtenerUsuarios() {
        return $this->usuarios;
    }
}
?>
