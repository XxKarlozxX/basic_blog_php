<?php

// El controlador encapsula acciones
class UsuarioController {

    public function mostrarTodos() {
        require_once 'models/Usuario.php';

        $usuario = new Usuario();

        $todos = $usuario->conseguirTodos();

        require_once 'views/usuarios/mostrar-todos.php';
    }

    public function crear() {
        require_once 'views/usuarios/crear.php';
    }

}
