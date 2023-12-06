<?php include("include/conexion.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WILLY</title>

    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include('include/menu.php'); ?>
    <!-- INICIO DE CONTENIDO -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <?php include("include/modal_regis_cliente.php"); ?> 
                        <h4>LISTADO DE CLIENTES</h4>
                        <div class="card">
                            <div class="card-body">
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>Nº cliente</th>
                                            <th>RUC/DNI</th>
                                            <th>RAZON SOCIAL</th>
                                            <th>TELEFONO</th>
                                            <th>CORREO</th>
                                            <th>DIRECCION</th>
                                            <th>DIRECCION DE ENVIO</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $consulta = "SELECT * FROM cliente";
                                        $ejecutar = mysqli_query($conexion, $consulta);
                                        $contador = 1;
                                        while ($respuesta = mysqli_fetch_array($ejecutar)) {
                                            echo "<tr>";
                                            echo "<td>" . $contador . "</td>";
                                            echo "<td>" . $respuesta['ruc_dni'] . "</td>";
                                            echo "<td>" . $respuesta['razon_social'] . "</td>";
                                            echo "<td>" . $respuesta['telefono'] . "</td>";
                                            echo "<td>" . $respuesta['correo'] . "</td>";
                                            echo "<td>" . $respuesta['direccion'] . "</td>";
                                            echo "<td>" . $respuesta['direccion_envio'] . "</td>";
                                            echo "<td>
                                                  <button class='btn btn-success'>Editar</button>
                                                  <button class='btn btn-danger'>Eliminar</button>
                                                  </td>";
                                            echo "</tr>";
                                            $contador++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE CONTENIDO -->

    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- third party js -->
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
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="plantilla/Admin/vertical/assets/pages/datatables-demo.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>
</body>
</html>