<?php
include("../bd/conexion.php");
if (isset($_POST["btnregistro"])) {
    if (
        strlen($_POST["Nusu"]) >= 1 && 
        strlen($_POST["Ncontra"]) >= 1
        
        ) {
            $usu= trim($_POST['Nusu']);
            $contra= trim($_POST['Ncontra']);
            $consulta = "insert into usuario(nomb_usuario,contraseña)
            VALUES ('$usu','$contra')";

            $resultado = mysqli_query($connect,$consulta);
            if ($resultado) {
            ?>
            <script>
                Swal.fire({
                title: "REGISTRO EXITOSO!",
                icon: "success"
                })
            </script>
            <?php
            } else {
                ?>
                <script>
                    Swal.fire({
                    title: "OCURRIO UN ERROR",
                    icon: "error"
                })
            </script>
                <?php
            }
        }else{
            ?>
            <script>
                    Swal.fire({
                    title: "LLENA TODOS LOS CAMPOS",
                    icon: "warning"
                })
            </script>
            <?php
        }
            

            
    }
    


?> 