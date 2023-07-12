<?php

session_start();
include("../bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");



// Consulta SQL para seleccionar los campos requeridos de la tabla "roles"
$sql = "SELECT Id_rol, Nombre_rol FROM roles WHERE Activo";

$result = $db->query($sql);
//VERIFICAR
// Verificar si se encontraron registros
if ($result->num_rows > 0) {
    // Array para almacenar los resultados
    $roles = array();

    // Recorrer los resultados y almacenarlos en el array
    while ($row = $result->fetch_assoc()) {
        $rol = array(
            'Id_rol' => $row['Id_rol'],
            'Nombre_rol' => $row['Nombre_rol']
        );
        array_push($roles, $rol);
    }

    // Codificar el array como JSON
    $json = json_encode($roles);

    // Devolver la respuesta JSON
    header('Content-Type: application/json');
    echo $json;
} else {
    // No se encontraron registros
    echo "No se encontraron roles.";
}

// Cerrar la conexión a la base de datos
$db->close();

?>
