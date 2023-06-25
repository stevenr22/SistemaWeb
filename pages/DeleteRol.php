<?php
session_start();
include("../bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");

$id = $_POST["id"];
echo $id;
if(isset($id)&& $id != null){
    if($registrar = mysqli_query($db, "UPDATE `roles` SET `Activo`='0' WHERE Id_rol='$id' ")){
        return "ok";
    }else{
        return "error";
    }
}else{
    return "error";
}

mysqli_free_result($registrar);
mysqli_close($db);