<?php
class DataBase
{
  public static function connect()
  {


    $db = new mysqli("localhost", "root","","control_mango");
    $db->query("SET NAMES 'utf8'");
    return $db;
  }

}
?>