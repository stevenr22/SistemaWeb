<?php
session_start();
include("../bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");

$usu = $_POST["Nusu"];
$contra = $_POST["Ncontra"];
if (empty($usu) || empty($contra)) {
    ?>
    <?php
    include("login.php");
    ?>
    <script>
        Swal.fire({
        title: "CAMPOS VACIOS!",
        icon: 'warning'
    })
    </script>
    
    <?php
} else {
    $consulta = "select * from usuario where nomb_usuario='$usu' and contraseña='$contra'";
    $resultado = mysqli_query($db,$consulta);

    $filas=mysqli_num_rows($resultado);
    if ($filas>0) {
        header("location:index.php");

    }else{
        ?>
    <?php
    include("login.php");
    ?>
    <script>
        Swal.fire({
        title: "DATOS INCORRECTOS!",
        icon: 'error'
    })
    </script>
    
    <?php
    }
}

mysqli_free_result($resultado);
mysqli_close($db);


