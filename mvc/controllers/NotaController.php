<?php

class NotaController {

    public function listar() {
        require_once 'models/Nota.php';

        $nota = new Nota();
        $nota->setNombre( 'Hola');
        $nota->setContenido( 'Hola mundo PHP MVC' );

        require_once 'views/nota/listar.php';

    }

    public function crear() {

    }

    public function borrar() {

    }
}
