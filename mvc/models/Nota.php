<?php
require_once 'ModeloBase.php';

class Nota extends ModeloBase {

    public $nombre;
    public $contenido;

    public function __construct() {
        parent::__construct();
    }

    //Getters
    function getNombre() {
        return $this->nombre;
    }

    function getContenido() {
        return $this->contenido;
    }

    //Setters
    function setNombre( $nombre ) {
        $this->nombre = $nombre;
    }

    function setContenido( $contenido) {
        $this->contenido = $contenido;
    }

    // Other functions
    /*public function conseguirTodos() {
        return "Sacando todos los usuario";
    }*/
}

