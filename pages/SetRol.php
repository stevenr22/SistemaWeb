<?php

session_start();
include("../bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");

// Obtener los valores enviados por POST
$id_emp = isset($_POST['id_emp']) ? $_POST['id_emp'] : null;
$id_rol = isset($_POST['id_rol']) ? $_POST['id_rol'] : null;

// Validar si se recibieron los IDs
if ($id_emp && $id_rol) {
    // Consulta SQL para actualizar el campo Id_rol en la tabla usuario
    $sql = "UPDATE usuario SET Id_rol = '$id_rol' WHERE id_usuario = '$id_emp'";

    if ($db->query($sql) === TRUE) {
        // La actualización se realizó correctamente
        $response = array(
            'success' => true,
            'message' => 'Rol actualizado exitosamente.'
        );
    } else {
        // Ocurrió un error al actualizar el campo Id_rol
        $response = array(
            'success' => false,
            'message' => 'Error al actualizar el campo Id_rol: ' . $db->error
        );
    }
} else {
    // No se recibieron los IDs
    $response = array(
        'success' => false,
        'message' => 'No se proporcionaron los IDs requeridos.'
    );
}

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);

// Cerrar la conexión a la base de datos
$db->close();

?>
