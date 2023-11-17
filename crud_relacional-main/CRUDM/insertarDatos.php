<?php

include "../config/conexion.php";

$nombreM = $_POST['nombreM'];
$estadoM = $_POST['estadoM'];
$empM = $_POST['empM'];
$telM = $_POST['telM'];
$canM = $_POST['canM'];
$tamM = $_POST['tamM'];

$sql = "INSERT INTO sucursales(nombreMarca, estadoMarca, empSuc, telSuc, proSuc, tamSuc)
    VALUES ('$nombreM','$estadoM','$empM','$telM','$canM','$tamM')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
