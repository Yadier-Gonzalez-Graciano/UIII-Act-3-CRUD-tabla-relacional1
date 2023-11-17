<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nombreC = $_POST['nombreC'];
    $estadoC = $_POST['estadoC'];
    $socC = $_POST['socC'];
    $tipC = $_POST['tipC'];
    $dirC = $_POST['dirC'];
    $telC = $_POST['telC'];
    $emaC = $_POST['emaC'];


    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE provedores SET nombreCategoria = '$nombreC',EstadoCategoria = '$estadoC',socProvedores = '$socC',tipProvedores = '$tipC',dirProvedores = '$dirC',telProvedores = '$telC',emaProvedores = '$emaC' WHERE idCategoria = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
