<!--BARRA LATERAL -->
<aside id="lateral">
  <div id="login" class="block-aside">
  <?php if ( !isset($_SESSION['identity']) ) : ?>
    <h3>Entrar a la web</h3>
    <form method="post" action="<?=base_url?>Usuario/login">
      <label for="email">Email</label>
      <input type="email" name="email" id="">

      <label for="password">Contraseña</label>
      <input type="password" name="password" id="">

      <input type="submit" value="Enviar">
    </form>
<?php else: ?>
      <h3><?=$_SESSION['identity']->nombre ?> <?=$_SESSION['identity']->apellidos ?></h3>
<?php endif; ?>
    <ul>
     <li><a href="#">Mis pedidos</a></li>
     <li><a href="#">Gestionar pedidos</a></li>
     <li><a href="#">Gestionar Categorias</a></li>
     <li><a href="<?=base_url?>/Usuario/logout">Cerrar Session</a></li>
    </ul>
  </div>
</aside>
<!-- CONTENIDO CENTRAL -->
<div id="central">
