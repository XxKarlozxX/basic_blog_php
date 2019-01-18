<?php
$servidor = "practice_db_1";
$usuario = "root";
$password = "password";
$basededatos = "blogmaster";

$db = mysqli_connect( $servidor, $usuario, $password, $basededatos );


mysqli_query( $db, "SET NAMES 'utf8'" );

// Iniciar session
session_start();