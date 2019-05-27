<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Camisetas</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
</head>
<body>
<div class="container">
    <!--CABECERA -->
    <header id="header">
        <div id="logo">
            <img src="<?=base_url?>assets/img/camiseta.png" alt="camiseta Logo" />
            <a href="index.php">
            Tienda de camisetas
            </a>
        </div>
    </header>
    <!-- MENÚ -->
    <nav id="menu">
        <ul>
            <li><a href="http://">Inicio</a></li>
            <li><a href="http://">Categoria 1</a></li>
            <li><a href="http://">Categoria 2</a></li>
            <li><a href="http://">Categoria 3</a></li>
            <li><a href="http://">Categoria 4</a></li>
            <li><a href="http://">Categoria 5</a></li>
        </ul>
    </nav>
    <div id="content">
