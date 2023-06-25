<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio</title>
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
                            <h1 class="page-header">Registro de insumos
                           
     
                            </h1>
                            
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                  
                    <!-- /.row -->
                  
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

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <!-- <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script> -->

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>