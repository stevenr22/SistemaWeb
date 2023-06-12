<?php
include("../bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");


$usuario = $_POST['Nusuario'];
$pass = $_POST['contraseña'];

$band = false;

$sentencia = "select * from usuario where estado=1 and nomb_usuario='$usuario' 
            and contraseña='$pass'";
$respuesta = $db->query($sentencia);
while($fila = $respuesta->fetch_array()){
    $band = true;
}

if ($band) header("location:index.php");
else header("location:login.php");

?>