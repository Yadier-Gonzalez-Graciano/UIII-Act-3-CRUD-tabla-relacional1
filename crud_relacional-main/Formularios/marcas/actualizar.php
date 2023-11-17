<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">PROVEEDORES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">SUCURSALES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR SUCURSAL</h5>
                        <form action="<?php echo base_url; ?>CRUDM/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM sucursales WHERE idMarca =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['idMarca'] ?>">
                            <div class="mb-3">
                                <label for="nombreM" class="form-label">Direccion</label>
                                <input type="text" class="form-control" id="nombreM" name="nombreM" placeholder="Nombre de la marca" value="<?php echo $row['nombreMarca'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="estadoM" class="form-label">Num Departamentos</label>
                                <input type="text" class="form-control" id="estadoM" name="estadoM" placeholder="Estado de la marca" value="<?php echo $row['estadoMarca'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="empM" class="form-label">Num enpleados</label>
                                <input type="text" class="form-control" id="empM" name="empM" placeholder="Num empleados" value="<?php echo $row['empSuc'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="telM" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="telM" name="telM" placeholder="Telefono" value="<?php echo $row['telSuc'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="canM" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" id="canM" name="canM" placeholder="Cantidad" value="<?php echo $row['proSuc'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tamM" class="form-label">Tamaño</label>
                                <input type="text" class="form-control" id="tamM" name="tamM" placeholder="Tamaño Suc" value="<?php echo $row['tamSuc'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>