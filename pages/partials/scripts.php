<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
if(isset($_SESSION['MensajeError']) && $_SESSION['MensajeError'] !=""){?>
    <script>
        Swal.fire({
            title: "Ha ocurriodo un error!",
            icon: 'error',
            text:'<?php echo $_SESSION['MensajeError']?>'

        })
    </script>

<?php
$_SESSION['MensajeError']="";
}
?>
<?php
if(isset($_SESSION['MensajeExito']) && $_SESSION['MensajeExito'] !=""){?>
    <script>
        Swal.fire({
            title: "Transaccion Exitosa!",
            icon: 'success',
            text:'<?php echo $_SESSION['MensajeExito']?>'

        })
    </script>

<?php
$_SESSION['MensajeExito']="";
}
?>