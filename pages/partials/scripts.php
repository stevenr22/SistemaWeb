<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
                $('.datatable').DataTable({
				"language": {
					"processing": "Procesando...",
					"lengthMenu": "Mostrar _MENU_ registros",
					"zeroRecords": "No se encontraron resultados",
					"emptyTable": "Ningún dato disponible en esta tabla",
					"info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
					"infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
					"infoFiltered": "(filtrado de un total de _MAX_ registros)",
					"search": "Buscar:",
					"infoThousands": ",",
					"loadingRecords": "Cargando...",
					"paginate": {
						"first": "Primero",
						"last": "Último",
						"next": "Siguiente",
						"previous": "Anterior"
					},
				}
			});
            });
</script>
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