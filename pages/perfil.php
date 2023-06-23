<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Datos</title>
        <?php include("partials/head.php");?>
    </head>
    <body>

    <div id="page-wrapper">
        <!-- Navigation -->
        <?php include("partials/menu.php"); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Perfil</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    DATOS DEL EMPLEADO
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" method="post" action="guardaris.php" id="formito">

                                            <div class="form-group">
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
                                                    <input class="form-control" type="text" name="Nrol" id="Nrol"readonly value="Valor no editable">
                                                </div>

                                                <button type="submit" class="btn btn-success">Editar</button>
                                            
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
  



    </body>
</html>
