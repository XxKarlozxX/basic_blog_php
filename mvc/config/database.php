<?php


class database {

    public static function conectar() {
        $conexion = new mysqli( 'practice_db_1', 'root', 'password', 'notas_master');
        $conexion->query("SET NAMES 'UTF8'" );

        return $conexion;
    }
}
