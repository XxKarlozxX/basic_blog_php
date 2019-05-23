<?php
function controllers_autoload( $classname ) {
    $classname = str_replace('\\', DIRECTORY_SEPARATOR, $classname );
    include 'controllers/' . $classname . '.php';
}

spl_autoload_register( 'controllers_autoload' );
