<?php 

if ( !isset( $_POST['busqueda'] ) ) {
    header( 'Location: index.php');
}

?>
<?php require_once './includes/cabecera.php'; ?>
<?php require_once './includes/lateral.php'; ?>

<div id="principal">
  
    <h1>Resultado de la busqueda: <?= $_POST['busqueda']?></h1>
    <?php 
    $busquedas = conseguirEntradas( $db, null, null, $_POST['busqueda'] );
    if ( ! empty( $busquedas ) && mysqli_num_rows( $busquedas ) >= 1) :
        while(  $busqueda = mysqli_fetch_assoc( $busquedas ) ) :
    ?>
            <article class="entrada">
                <a href="entrada.php?id=<?= $busqueda['id'] ?>">
                    <h2><?= $busqueda['titulo'] ?></h2>
                    <span class="fecha"><?= $busqueda['categoria'] . ' | ' . $busqueda['fecha'] ?></span>
                    <p><?= substr( $busqueda['descripcion'], 0, 200 ) ?></p>
                </a>
            </article>
    <?php
        endwhile;
    else :
    ?>
        <div class="alerta">No se obtuvieron resultado de la busqueda</div>
    <?php endif; ?>
</div>

<?php require_once './includes/pie.php'; ?>