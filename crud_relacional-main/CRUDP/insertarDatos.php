<?php

include "../config/conexion.php";

$categoria = $_POST['categoriasP'];
$marca = $_POST['marcasP'];
$nombre = $_POST['nombreP'];
$descripcion = $_POST['descripcionP'];
$precio = $_POST['precioP'];
$fecha = $_POST['fechaP'];
$alm = $_POST['almP'];

$sql = "INSERT INTO productos(categoriaId,marcaId,nombreProducto,descripcionProducto,precioProducto,fechaProducto,almProducto)
    VALUES ('$categoria','$marca','$nombre','$descripcion','$precio','$fecha','$alm')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
