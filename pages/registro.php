<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Registrar</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        

        <link href="../css/metisMenu.min.css" rel="stylesheet">
        <link href="../css/startmin.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/metisMenu.min.js"></script>
        <script src="../js/startmin.js"></script>

        <link rel="icon" href="../img/mango-and-lef-png.ico" type="image/ico" />
       


</head>
<body>
    <div class="container">

        <div class="card col-lg-3">
            <div class="header">
                <img src="../img/usuario.png">
                <h1><b>Registrar</b></h1>
              </div>

            <form method="post" action="validarregistro.php">
                <div class="form-group">
                    <label for="Nusuario"><b>Usuario:</b> </label>
                    <input id="usuario" name="Nusu" class="form-control" type="text" placeholder="Ingrese su usuario">
                </div>
                <div class="form-group">
                    <label for="contraseña"><b>Contraseña:</b> </label>
                    <input id="contraseña" name="Ncontra" class="form-control" type="password" placeholder="Ingrese su contraseña">
                </div>
                <div class="form-group">
                    <label for="nombre"><b>Nombres:</b> </label>
                    <input id="nombre" name="Nnombre" class="form-control" type="text" placeholder="Ingrese sus nombres">
                </div>
                <div class="form-group">
                    <label for="apellido"><b>Apellidos:</b> </label>
                    <input id="apellido" name="Napellido" class="form-control" type="text" placeholder="Ingrese sus apellidos">
                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Remember Me">Recuerdame
                    </label>
                </div>
                
                <button type="submit" name="btnregistro"  class="btn btn-success mb-2">Registrar</button>
                
                
                <br> 
                <a id="efecto" href="../pages/login.php">
                    <b>Tiene cuenta? Inicia</b>
                </a>
               

            </form>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
