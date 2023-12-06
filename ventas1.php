<?php include("include/conexion.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Willy</title>

    <!-- Stylesheets -->
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

    <!-- Custom Styles -->
    <style>
        body {
            background: linear-gradient(to right, #33DAFF, #FFE633);
        }

        .content-container {
            background: linear-gradient(to right, #33DAFF, #FFE633);
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }

        .products-container {
            background: linear-gradient(to right, #33DAFF, #FFE633);
            color: #FF334C;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php include('include/menu.php'); ?>

    <!-- Content Start -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>REGISTRAR NUEVA VENTA</h4>
                        <a href="ventas1.php" class="btn btn-success">+Nuevo</a>

                        <!-- Main Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12" style="background: linear-gradient(to right, #33FFC7, #DDFF33); color: #ffffff; padding: 20px; border-radius: 10px;">
                                        <form action="">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">DNI:</label>
                                                <input type="number" name="dni" class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder="dni cliente">
                                                <label class="col-lg-1 col-md-1 col-sm-1"></label>
                                                <button class="btn btn-info col-lg-1 col-md-1 col-sm-2">Buscar</button>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">APELLIDOS Y NOMBRES:</label>
                                                <input type="text" name="nombres" class="form-control col-lg-6 col-md-6 col-sm-12" required>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">USUARIO</label>
                                                <select name="usuario" id="usuario" class="form-control col-lg-6 col-md-6 col-sm-12">
                                                    <option value=""></option>
                                                    <option value="1">Usuario 1</option>
                                                    <option value="2">Usuario 2</option>
                                                    <option value="3">Usuario 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">PRODUCTO:</label>
                                                <input type="number" name="producto" class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder="codigo producto">
                                                <label class="col-lg-1 col-md-1 col-sm-1"></label>
                                                <button class="btn btn-info col-lg-1 col-md-1 col-sm-2">Buscar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="card" style="background: linear-gradient(to right, #5BFF33, #33FFF9); color: #FF334C; padding: 20px; border-radius: 10px;">
                                            <div class="card-body">
                                                <h5 class="card-title text-center mb-4">PRODUCTOS</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover mb-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col" width="5%">Nro</th>
                                                                <th scope="col" width="50%">Descripción</th>
                                                                <th scope="col" width="10%">Cantidad</th>
                                                                <th scope="col" width="10%">P. Unit</th>
                                                                <th scope="col" width="10%">Importe</th>
                                                                <th scope="col" width="15%">Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Nombre Producto</td>
                                                                <td><input type="number" value="2" class="form-control" /></td>
                                                                <td>S/. 50.00</td>
                                                                <td>S/. 100.00</td>
                                                                <td>
                                                                    <button class="btn btn-info btn-sm">Editar</button>
                                                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                                                </td>
                                                            </tr>
                                                            <!-- Agrega más filas según sea necesario -->

                                                            <tr>
                                                                <td colspan="4" class="text-center font-weight-bold">Total</td>
                                                                <td colspan="2">S/. 100.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

    <!-- JavaScript files -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- Third-party JavaScript files -->
    <script src="plantilla/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.html5.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.flash.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.print.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.select.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/pdfmake.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/vfs_fonts.js"></script>

    <!-- Datatables init -->
    <script src="plantilla/Admin/vertical/assets/pages/datatables-demo.js"></script>

    <!-- Custom JavaScript file -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>
</body>

</html>