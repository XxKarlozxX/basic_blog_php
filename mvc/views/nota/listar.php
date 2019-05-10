<?php
while( $nota = $notas->fetch_object() ):
    echo $nota->titulo . ' - ' . $nota->fecha;
endwhile;
?>
