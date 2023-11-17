<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR PROVEEDOR</h5>
                        <form action="<?php echo base_url; ?>CRUDC/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">Nombre Comercial</label>
                                <input type="text" class="form-control" id="nombreC" name="nombreC" placeholder="Nombre Comercial" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombreP" class="form-label">RFC</label>
                                <input type="text" class="form-control" id="estadoC" name="estadoC" placeholder="RFC" required>
                            </div>
                            <div class="mb-3">
                                <label for="socP" class="form-label">Nombre Social</label>
                                <input type="text" class="form-control" id="socC" name="socC" placeholder="Nombre Social" required>
                            </div>
                            <div class="mb-3">
                                <label for="tipP" class="form-label">Tipo Producto</label>
                                <input type="text" class="form-control" id="tipC" name="tipC" placeholder="Tipo de Producto" required>
                            </div>
                            <div class="mb-3">
                                <label for="dirP" class="form-label">Direccion</label>
                                <input type="text" class="form-control" id="dirC" name="dirC" placeholder="Direccion" required>
                            </div>
                            <div class="mb-3">
                                <label for="telP" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="telC" name="telC" placeholder="Telefono" required>
                            </div>
                            <div class="mb-3">
                                <label for="emaP" class="form-label">Email</label>
                                <input type="text" class="form-control" id="emaC" name="emaC" placeholder="Email" required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/categorias/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
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