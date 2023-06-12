<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Proyecto 9c</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include("menu.php"); ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Empleado</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    Basic Form Elements
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" method="post" action="guardaris.php" id="formito">

                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre y el apellido">
                                                </div>

                                                <div class="form-group">
                                                    <label>Cédula</label>
                                                    <input class="form-control" type="text" name="ced" id="ced" placeholder="Ingrese cédula">
                                                </div>

                                                <div class="form-group">
                                                    <label>Correo</label>
                                                    <input class="form-control" type="email" name="correo" id="correo" placeholder="Ingrese el correo">
                                                </div>

                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                    <input class="form-control" type="text" name="dir" id="dir" placeholder="Ingrese la dirección">
                                                </div>

                                                <div class="form-group">
                                                    <label>Ciudad</label>
                                                    <select class="form-control" name="ciudad" id="ciudad">
                                                        <option value="1">GYE</option>
                                                        <option value="2">UIO</option>
                                                        <option value="3">CUM</option>
                                                        <option value="4">ESM</option>
                                                        <option value="5">MAN</option>
                                                    </select>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Usuario</label>
                                                            <input class="form-control" type="text" name="usu" id="usu" placeholder="Ingrese el usuario">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Contraseña</label>
                                                            <input class="form-control" type="password" name="pass" id="pass" placeholder="Ingrese la contraseña">
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-success">Guardar Registro</button>
                                                <button type="reset" class="btn btn-info">Limpiar Datos</button>
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



                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    Empleados registrados
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead class="bg-warning">
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Cédula</th>
                                                    <th>Correo</th>
                                                    <th>Fecha Nacimiento</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $sentencia = "select * from empleado where estado=1";
                                            $respuesta = $db->query($sentencia);
                                            while($arreglo = $respuesta->fetch_array()){
                                            ?>

                                                <tr class="odd gradeX">
                                                    <td><?php echo $arreglo['nombre'] ?></td>
                                                    <td><?php echo $arreglo['cedula'] ?></td>
                                                    <td><?php echo $arreglo['correo'] ?></td>
                                                    <td class="center"><?php echo $arreglo['fecha_nac'] ?></td>
                                                    <td class="center">
                                                        <button type="button" class="btn btn-warning" onclick="modalcito_aparece('<?php echo $arreglo['emp_id']; ?>','<?php echo $arreglo['nombre']; ?>','<?php echo $arreglo['cedula']; ?>', '<?php echo $arreglo['correo']; ?>', '<?php echo $arreglo['fecha_nac']; ?>')">ACTUALIZAR</button>
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

            function modalcito_aparece(id, nom, ced, cor, fnaci){
                $("#modalcito").modal("show");
                $("#Enombre").val(nom);
                $("#idregistro").val(id);
                $("#Eced").val(ced);
                $("#Ecorreo").val(cor);
                $("#Efnac").val(fnaci);
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
                                <label>Nombre</label>
                                <input class="form-control" type="text" name="nombre" id="Enombre" placeholder="Ingrese el nombre y el apellido">
                            </div>

                            <div class="form-group">
                                <label>Cédula</label>
                                <input class="form-control" type="text" name="ced" id="Eced" placeholder="Ingrese cédula">
                            </div>

                            <div class="form-group">
                                <label>Correo</label>
                                <input class="form-control" type="email" name="correo" id="Ecorreo" placeholder="Ingrese el correo">
                            </div>

                            <div class="form-group">
                                <label>Dirección</label>
                                <input class="form-control" type="text" name="dir" id="Edir" placeholder="Ingrese la dirección">
                            </div>

                            <div class="form-group">
                                <label>Ciudad</label>
                                <select class="form-control" name="ciudad" id="Eciudad">
                                    <option value="1">GYE</option>
                                    <option value="2">UIO</option>
                                    <option value="3">CUM</option>
                                    <option value="4">ESM</option>
                                    <option value="5">MAN</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        <input class="form-control" type="text" name="usu" id="Eusu" placeholder="Ingrese el usuario">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input class="form-control" type="password" name="pass" id="Epass" placeholder="Ingrese la contraseña">
                                    </div>
                                </div>
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
