<?php

class Database {

  public static function connect() {
    $db = new mysqli('practice_db_1','root','password','tienda_master');
    $db->query("SET NAMES 'utf8'");

    return $db;
  }
}
