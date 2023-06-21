<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Iniciar</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css">

        <link href="../css/metisMenu.min.css" rel="stylesheet">
        <link href="../css/startmin.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/metisMenu.min.js"></script>
        <script src="../js/startmin.js"></script>
        <script src="https://kit.fontawesome.com/0adef27e98.js" crossorigin="anonymous"></script>

        <link rel="icon" href="../img/mango-and-lef-png.ico" type="image/ico" />
        


</head>
<body>
    
    <div class="container">

        <div class="card col-lg-3">
            <div class="header">
                <img src="../img/usuario.png">
                <h1><b>Iniciar sesión</b></h1>
            </div>
            <form method="post" action="revisarlogin.php">
                <div class="form-group">
                    <label for="usuario"><b>Usuario:</b> </label>
                    <input id="usuario" name="Nusu" class="form-control" type="text" placeholder="Ingrese su usuario">
                </div>
                <div class="contraseña">
                    <label for="contraseña"><b>Contraseña:</b> </label>
                    <div class="box-eye">
                        <button type="button" onclick="mostrarcontraseña('contraseña','eyecontra')">
                            <i id="eyecontra" class="fa-solid fa-eye changecontra"></i>
                        </button>
                    </div>
                    <input id="contraseña" name="Ncontra" class="form-control" type="password" placeholder="Ingrese su contraseña">
                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Remember Me">Recuerdame
                    </label>
                </div>
            
                <button type="submit" class="btn btn-success mb-2">Iniciar</button>
                <br> 
                <a id="efecto" href="../pages/registro.php">
                    <b>No tiene cuenta? Registrate</b>
                </a>
            

            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/misvalidaciones.js"></script>
</body>
</html>
