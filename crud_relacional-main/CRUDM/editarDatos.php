<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nombreM = $_POST['nombreM'];
    $estadoM = $_POST['estadoM'];
    $empM = $_POST['empM'];
    $telM = $_POST['telM'];
    $canM = $_POST['canM'];
    $tamM = $_POST['tamM'];


    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE sucursales SET nombreMarca = '$nombreM',estadoMarca = '$estadoM',empSuc = '$empM',telSuc = '$telM',proSuc = '$canM',tamSuc = '$tamM' WHERE idMarca = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/marcas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
