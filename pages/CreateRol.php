<?php
session_start();
include("../bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");

$rol = $_POST["nombre"];
$des = $_POST["des"];


$sql = mysqli_query($db,"SELECT Nombre_rol FROM roles where Nombre_rol='$rol' and Activo ");

$filas=mysqli_num_rows($sql);
if ($filas<=0) {
    if($registrar = mysqli_query($db, "INSERT INTO roles (Nombre_rol, Descripcion) VALUES ('$rol','$des')")){
        ?>
        <?php
        include("roles.php");
        ?>
        <script>
            Swal.fire({
            title: "Registro exitoso!",
            icon: 'success',
            text: 'Rol creado existosamente!'
            
        })
        </script>
    
        <?php
    }
} else {
    ?>
    <?php
    include("roles.php");
    ?>
    <script>
        Swal.fire({
        title: "Ocurrió in error!",
        icon: 'error',
        text: 'El rol ya se encuentra registrado!'
        
    })
    </script>
 
    <?php
}
/* mysqli_free_result($sql);
mysqli_close($db); */