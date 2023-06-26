<?php
session_start();
if (isset($_SESSION['DBid']) == false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Empleados</title>
    <?php include("partials/head.php"); ?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include("partials/menu.php"); ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">EMPLEADOS REGISTRADOS</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">

                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>



                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                TABLA DE DATOS
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover datatable" id="dataTables-example">
                                        <thead class="bg-warning">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Nombre de usuario</th>
                                                <th>Rol</th>
                                                <th>Opciones</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sentencia = "SELECT u.nomb_usuario, u.nombre, u.apellido, r.Nombre_rol FROM usuario as u , roles as r WHERE u.Id_rol=r.Id_rol and r.Activo AND u.Activo";
                                            $respuesta = $db->query($sentencia);
                                            while ($arreglo = $respuesta->fetch_array()) {
                                            ?>

                                                <tr class="odd gradeX">
                                                    <td><?php echo $arreglo['id_usuario'] ?></td>
                                                    <td><?php echo $arreglo['nombre'] ?></td>
                                                    <td><?php echo $arreglo['apellido'] ?></td>
                                                    <td><?php echo $arreglo['nomb_usuario'] ?></td>
                                                    <td><?php echo $arreglo['Nombre_rol'] ?></td>


                                                    <td class="center">
                                                        <button type="button" class="btn btn-warning" onclick="modalcito_aparece('<?php echo $arreglo['id_usuario']; ?>','<?php echo $arreglo['nombre']; ?>','<?php echo $arreglo['apellido']; ?>', '<?php echo $arreglo['nomb_usuario']; ?>','<?php echo $arreglo['Nombre_rol']; ?>','<?php echo $arreglo['Id_rol']; ?>')">ACTUALIZAR</button>
                                                        <button type="button" class="btn btn-danger" onclick="eliminar('<?php echo $arreglo['Id_rol']; ?>')">ELIMINAR</button>
                                                    </td>
                                                </tr>

                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->

                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });

            function modalcito_aparece(id, nom, ape, nom_usu,rol){
                $("#modalcito").modal("show");
                $("#idregistro").val(id);
                $("#Nnom").val(nom);
                $("#Nape").val(ape);
                $("#Nnom_usu").val(nom_usu);
                $("#Nrol").val(rol);
            }

            function modalcito_seesconde(){
                $("#modalcito").modal("hide");
            }
        </script>

        <div id="modalcito" class="modal" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <div class="modal-title">EDITAR REGISTROS</div>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" action="editaris.php" id="formito2">

                            <div class="form-group">
                                <label>Nombres</label>
                                <input class="form-control" type="text" name="Nnom" id="Nnom" readonly value="Valor no editable">
                            </div>

                        <div class="form-group">
                            <label>Apellidos</label>
                            <input class="form-control" type="text" name="Nape" id="Nape" readonly value="Valor no editable">
                        </div>

                        <div class="form-group">
                            <label>Nombre de usuario</label>
                            <input class="form-control" type="text" name="Nnom_usu" id="Nnom_usu" readonly value="Valor no editable">
                        </div>

                        <div class="form-group">
                            <label>Rol</label>
                            <select name="rol" id="rol" class="form-control" aria-label="Default select example">

                            </select>
                        </div>
                        <button type="button" onclick="UpdateRol()" class="btn btn-success"><i class="fa fa-paper-plane"></i>Actualizar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" CLASS="btn btn-danger" onclick="modalcito_seesconde()">CERRAR</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../js/dataTables/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/startmin.js"></script>
    <?php include("partials/scripts.php"); ?>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        function modalcito_seesconde() {
            $("#modalcito").modal("hide");
        }

        function cargarRoles(id) {
            // Realizar la solicitud GET a GetRoles.php
            fetch('GetRoles.php')
                .then(response => response.json())
                .then(data => {
                    // Obtener la referencia al select
                    var select = document.getElementById('rol');

                    // Vaciar el contenido actual del select
                    select.innerHTML = '';

                    // Recorrer los datos y crear las opciones del select
                    data.forEach(rol => {
                        var option = document.createElement('option');
                        option.value = rol.Id_rol;
                        option.text = rol.Nombre_rol;

                        // Establecer el valor seleccionado (por ejemplo, si Id_rol es 2)
                        if (rol.Id_rol === id) {
                            option.selected = true;
                        }

                        select.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function modalcito_aparece(id, nom, ape, nom_usu, rol, idRol) {
            $("#modalcito").modal("show");
            $("#id_Emp").val(id);
            $("#Nnom").val(nom);
            $("#Nape").val(ape);
            $("#Nnom_usu").val(nom_usu);
            cargarRoles(idRol)
            //$("#rol option:selected").val(idRol);
        }

        function UpdateRol() {
            let id_emp = $("#id_Emp").val();
            let id_rol = $("#rol option:selected").val();

            // Verificar si los IDs están presentes
            if (id_emp && id_rol) {
                // Objeto con los datos a enviar
                let data = {
                    id_emp: id_emp,
                    id_rol: id_rol
                };

                // Realizar la solicitud AJAX
                $.ajax({
                    url: 'SetRol.php',
                    method: 'POST',
                    data: data,
                    dataType: 'json',
                    success: function(response) {
                        // Verificar si la actualización se realizó correctamente
                        if (response.success) {
                            swal.fire("Transacción exitosa", response.message, "success").then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            location.reload();
                            });
                        } else {
                            swal.fire("Error", "Error: " + response.message, "error");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                swal.fire("Advertencia", "Debe seleccionar un empleado y un rol.", "warning");
            }
        }
    </script>
</body>

</html>