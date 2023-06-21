<?php
include("../bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");

if (isset($_POST["btnregistro"])){
    if (strlen($_POST["Nusu"])>=1 && 
        strlen($_POST["Ncontra"])>=1 && 
        strlen($_POST["Nnombre"])>=1 && 
        strlen($_POST["Napellido"])>=1){
        
        $usu = trim($_POST["Nusu"]);
        $contra = trim($_POST["Ncontra"]);
        $nomb = trim($_POST["Nnombre"]);
        $ape = trim($_POST["Napellido"]);

        $consulta = "INSERT INTO usuario(nomb_usuario, contraseña, nombre, apellido) 
        VALUES ('$usu','$contra','$nomb','$ape')";

        $resultado = mysqli_query($db,$consulta);
        if ($resultado) {
            ?>
                <script>
                    Swal.fire({
                        title: 'REGISTRO EXITOSO!',
                        icon: 'success'
                    })   
                </script>
            <?php
        } else {
            ?>
            <script>
                Swal.fire({
                    title: 'UPS HA OCURRIDO UN ERROR..!',
                    icon: 'error'
                })   
            </script>
        <?php
        }
        
    }else{
        ?>
        <script>
            Swal.fire({
                title: 'POR FAVOR COMPLETE LOS CAMPOS',
                icon: 'warning'
            })   
        </script>
        <?php
    }
}


?>