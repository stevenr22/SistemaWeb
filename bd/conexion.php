<?php
class DataBase
{
  public static function connect()
  {
//      $serverName = "10.10.11.21\SQLEXPRESS";
//      $connectionInfo = array( "Database"=>"DBHANSON", "UID"=>"userName", "PWD"=>"password");
//      $db = sqlsrv_connect( $serverName, $connectionInfo);
//      return $db;


    $db = new mysqli("localhost", "root","","dac20239c");
    $db->query("SET NAMES 'utf8'");
    return $db;
  }

}
?>