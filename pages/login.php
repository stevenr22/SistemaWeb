<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Iniciar sesión</title>

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
        <link rel="stylesheet" href="../css/style.css">


</head>
<body>
<div class="container">

<div id="login" class="col-lg-4 offset-lg-8 col-md-6 offset-md-3col-12">
    <div class="header">
        <img src="../img/usuario.png">
        <h1><b>Iniciar Sesión</b></h1>
        
      </div>

    
    <form method="post" action="revisarlogin.php">
        <div class="form-group">
            <label for="usuario"><b>Usuario:</b> </label>
            <input id="usuario" name="Nusu" class="form-control" type="text" placeholder="Ingrese su usuario">
        </div>
        <div class="contraseña">
            <label for="contraseña"><b>Contraseña:</b> </label>
            <input id="contraseña" name="Ncontra" class="form-control" type="password" placeholder="Ingrese su contraseña">
        </div><br>
        <div class="checkbox">
            <label>
                <input name="remember" type="checkbox" value="Remember Me">Recuerdame
            </label>
        </div>
     
        <button type="submit" class="btn btn-success mb-2">Iniciar</button>
       
        
        <a id="efecto" href="../pages/registro.html">
            <p style="font-family: Arial, Helvetica, sans-serif;"><b>No tiene cuenta? Registrar</b></p>
        </a>
       

    </form>
</div>
</div>
    

</body>
</html>
