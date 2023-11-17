<?php

include "../config/conexion.php";

$nombreC = $_POST['nombreC'];
$estadoC = $_POST['estadoC'];
$socC = $_POST['socC'];
$tipC = $_POST['tipC'];
$dirC = $_POST['dirC'];
$telC = $_POST['telC'];
$emaC = $_POST['emaC'];



$sql = "INSERT INTO provedores(nombreCategoria, EstadoCategoria, socProvedores, tipProvedores, dirProvedores, telProvedores, emaProvedores)
    VALUES ('$nombreC','$estadoC','$socC','$tipC','$dirC','$telC','$emaC')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
