<?php
session_start();
include("../bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");

$usu = $_POST["Nusu"];
$contra = $_POST["Ncontra"];

$consulta = "select * from usuario where nomb_usuario='$usu' and contraseña='$contra'";
$resultado = mysqli_query($db,$consulta);

$filas=mysqli_num_rows($resultado);
if ($filas) {
    header("location:index.php");
} else {
    ?>
    <?php
    include("login.php");
    ?>
    <div class="alert alert-danger">
        <b>ERROR EN LA AUTENTIFICACIÓN</b>
    </div>
 
    <?php
}
mysqli_free_result($resultado);
mysqli_close($db);


