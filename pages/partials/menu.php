<?php
include("../bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");


?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Mango Production</a>
    </div>



    <ul class="nav navbar-right navbar-top-links">
       
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
               
                <i class="fa fa-user fa-fw"></i> 
                <?php 
                echo $_SESSION['DBnombre']." ". $_SESSION['DBapellido']; 
                ?>

                
                <b class="caret"></b>
            </a>




             
            <ul class="dropdown-menu dropdown-user">
                <li><a href="../pages/perfil.php"><i class="fa fa-user fa-fw"></i> Perfil</a>
                </li>

            </ul>






        </li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                
                <li>
                    <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> Usuarios <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="empleado.php"> Empleados</a>
                        </li>
                        <li>
                            <a href="roles.php">Roles</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Formularios</a>
                </li>

               
              

                <li>
                    <a href="../pages/cerrar_sesion.php"><i class="fa fa-close fa-fw"></i> Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
