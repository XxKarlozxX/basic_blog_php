<?php
require_once 'models/Usuario.php';

class UsuarioController {

  public function index() {
  }

  public function registro() {
    require_once 'views/usuario/registro.php';
  }

  public function save() {
      if ( isset($_POST) ) {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;

        if ( $nombre && $apellidos && $email && $password) {
          $usuario = new Usuario();
          $usuario->setNombre( $nombre );
          $usuario->setApellidos( $apellidos );
          $usuario->setEmail( $email );
          $usuario->setPassword( $password );

          $save = $usuario->save();
          if ( $save ) {
            $_SESSION['register'] = "Complete";
          } else {
            $_SESSION['register'] = "Failed";
          }
        } else {
          $_SESSION['register'] = "Failed";
        }
      } else {
        $_SESSION['register'] = "Failed";
      }
      header('Location:' . base_url . 'Usuario/registro' );
  }

  public function login() {
    if ( isset( $_POST ) ) {
      // Identificar al usuario
      //Consultar a la base de datos

      //crear una sesion

    }
    header( 'Location: ' . base_url );
  }









}
