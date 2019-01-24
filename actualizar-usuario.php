<?php
if ( isset( $_POST ) ) {
    require_once 'includes/conexion.php';
    
    $nombre = isset( $_POST['nombre'] ) ? mysqli_real_escape_string($db, $_POST['nombre'] ) : false;
    $apellidos = isset( $_POST['apellidos'] ) ?  mysqli_real_escape_string($db, $_POST['apellidos'] ) : false;
    $email = isset( $_POST['email'] ) ?  mysqli_real_escape_string($db, trim( $_POST['email'] ) ) : false;
    
    //array de errores
    $errores = array();

    //validar campo nombre
    if ( !empty( $nombre ) && ! is_numeric( $nombre ) && !preg_match("/[0-9]/", $nombre) ) {
        $nombre_validado = true;
    }  else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    //validar campo nombre
    if ( !empty( $apellidos ) && ! is_numeric( $apellidos ) && !preg_match("/[0-9]/", $apellidos) ) {
        $apellidos_validado = true;
    }  else {
        $apellidos_validado = false;
        $errores['apellidos'] = "los apellidos no son validos";
    }

    //validar el email
    if ( ! empty( $email ) && filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $email_validado = true;
    }  else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }

   
    $guardar_usuario = false;
    if ( count( $errores ) == 0 ) {
        $guardar_usuario = true;
      
        $usuario = $_SESSION['usuario'];
        $sql = "UPDATE usuarios SET " .
                "nombre = '$nombre', " .
                "apellidos = '$apellidos', " .
                "email = '$email' " .
                "WHERE id = " . $usuario['id'];

        $guardar = mysqli_query( $db, $sql );

        if ( $guardar ) {
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellidos'] = $apellidos;
            $_SESSION['usuario']['email'] = $email;
            
            $_SESSION['completado'] = "Tus datos se han actualizado con exito!";
        } else {
            $_SESSION['errores']['generales'] = "Fallo al actualizar tus datos";
        }

    } else {
        $_SESSION['errores'] = $errores;    
    }

}

header("Location: mis-datos.php");