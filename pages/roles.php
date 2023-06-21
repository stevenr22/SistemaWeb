<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Roles</title>
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
                            <h1 class="page-header">Roles</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>     
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Empleados 
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead class="bg-warning">
                                                <tr>
                                                    <th>Rol</th>
                                                    <th>Descripción</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $sql = $db->query("SELECT * FROM roles WHERE Activo=1");
                                            while($arreglo = $sql->fetch_array()){
                                            ?>

                                                <tr class="odd gradeX">
                                                    <td><?php echo $arreglo['Nombre_rol'] ?></td>
                                                    <td><?php echo $arreglo['Descripcion'] ?></td>
                                                    <td class="center">
                                                        <button type="button" class="btn btn-warning" onclick="modalcito_aparece('<?php echo $arreglo['Id_rol']; ?>','<?php echo $arreglo['Nombre_rol']; ?>','<?php echo $arreglo['Descripcion']; ?>')">ACTUALIZAR</button>
                                                        <button type="button" class="btn btn-danger" onclick="eliminar('<?php echo $arreglo['emp_id']; ?>')">ELIMINAR</button>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Registar rol
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" method="post" action="CreateRol.php" id="rol">

                                                <div class="form-group">
                                                    <label>Rol</label>
                                                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
                                                </div>

                                                <div class="form-group">
                                                    <label>Descripcion</label>
                                                    <input class="form-control" type="text" name="des" id="des" placeholder="Ingrese brebe descripción">
                                                </div>
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-paper-plane"></i> Guardar</button>
                                                
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->


                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
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

            function modalcito_aparece(id, nom, des){
                $("#modalcito").modal("show");
                $("#Enombre").val(nom);
                $("#idRol").val(id);
                $("#Edes").val(des);
            }

            function modalcito_seesconde(){
                $("#modalcito").modal("hide");
            }
        </script>

        <div id="modalcito" class="modal" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <div class="modal-title">Actualizar rol</div>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" action="editaris.php" id="formito2">

                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" type="text" name="nombre" id="Enombre" placeholder="Ingrese el nombre y el apellido">
                            </div>

                            <div class="form-group">
                                <label>Descripción</label>
                                <input class="form-control" type="text" name="des" id="Edes" placeholder="Ingrese cédula">
                            </div>

                            

                            <button type="submit" class="btn btn-success">Guardar Registro</button>
                            <button type="reset" class="btn btn-info">Limpiar Datos</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" CLASS="btn btn-danger" onclick="modalcito_seesconde()">CERRAR</button>
                    </div>
                </div>
            </div>
        </div>



    </body>
</html>
