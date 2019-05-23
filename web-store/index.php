<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Camisetas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container">
    <!--CABECERA -->
    <header id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="camiseta Logo" />
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
    <div id="contenido">
        <!--BARRA LATERAL -->
        <aside id="lateral">
            <div id="login" class="block-aside">
                <h3>Entrar a la web</h3>    
                <form method="post" action="">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="">

                    <input type="submit" value="Enviar">
                </form>
                <ul>
                    <li><a href="#">Mis pedidos</a></li>
                    <li><a href="#">Gestionar pedidos</a></li>
                    <li><a href="#">Gestionar Categorias</a></li>
                </ul>
            </div>
        </aside>
        <!-- CONTENIDO CENTRAL -->
        <div id="central">
            <h3>Productos destacados</h3>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#" class="button">Comprar</a>
            </div>
        </div>
    </div>

        <!-- PIE DE PAGINA -->

        <footer id="footer">
        <p>Desarrollado por Karloz "Rustiko" Hernández WEB &copy; <?= date( 'Y' ); ?></p>
        </footer>
</div>
</body>
</html>