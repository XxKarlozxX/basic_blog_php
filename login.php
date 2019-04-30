<?php
// iniciar sesión y la conexion a la BD
require_once 'includes/conexion.php';

// Recoger los datos del formulario
if ( $_POST ) {
    
    // Borramos la session anterior
    if ( isset( $_SESSION['error_login'] ) ) {
        session_unset( $_SESSION['error_login'] );
    }

    //Obtener datos
    $email = trim( $_POST['email'] );
    $password = $_POST['password'];

    // cosulta para comprobar las credenciasles del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query( $db, $sql );

    if ( $login && mysqli_num_rows( $login ) == 1 ) {
        $usuario = mysqli_fetch_assoc( $login );

        $verify = password_verify( $password, $usuario['password'] );

        if ( $verify ) {
            // Guarda una sesion con los datos obtenidos
            $_SESSION['usuario'] = $usuario;

        } else {
            // Si algo falla enviar sesion de que algo ha salido mal
            $_SESSION['error_login'] = "Login Incorrecto!!";
        }
    } else {
        $_SESSION['error_login'] = "Login Incorrecto!!";
    }


}

// Rediriji al index

header('Location: index.php');