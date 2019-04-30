<?php

require_once 'autoload.php';
/*
$usuario = new Usuario();

echo $usuario->nombre;
echo "<br>";
echo $usuario->email;

 */

/* Espacios de nombre */
use MisClasesi\Usuario;
use MisClasesi\Categoria;
use MisClasesi\Entrada;

class Principal {

    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct() {
        $this->usuario   = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada   = new Entrada();
    }
}

$principal = new Principal();
var_dump( $principal->usuario );
