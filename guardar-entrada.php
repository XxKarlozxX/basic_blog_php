<?php

if ( isset( $_POST) ) {
    // Conexion a la base de datos
    require_once 'includes/conexion.php';

    $titulo = isset( $_POST['titulo'] ) ? mysqli_real_escape_string( $db, $_POST['titulo'] ) : false;
    $description = isset( $_POST['descripcion'] ) ? mysqli_real_escape_string( $db, $_POST['descripcion'] ) : false;
    $categoria = isset( $_POST['categoria'] ) ? (int)$_POST['categoria']  : false;
    $usuario = $_SESSION['usuario']['id'];

    // Validacion
    $errores = array();

    if ( empty( $titulo ) ) {
        $errores['titulo'] = 'El titulo no es valido';
    }

    if ( empty( $description ) ) {
        $errores['description'] = 'La description no es valida';
    }

    if ( empty( $categoria ) && ! is_numeric( $categoria ) ) {
        $errores['categoria'] = 'La categoria no es valida';
    }

    if ( count( $errores ) == 0 ) {
        $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$description', CURDATE());";

        $guardar = mysqli_query( $db, $sql );
        //var_dump( mysql_error());
        //die();
    } else {
        $_SESSION['errores_entrda'] = $errores;
    }


}
header('Location: index.php');