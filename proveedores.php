<?php include("include/conexion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WILLY</title>

    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
include('include/menu.php');
?>
<!--INICIO DE CONTENIDO-->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php include("include/modal_regis_provee.php"); ?> 
                    <h4>LISTADO DE PEDIDOS</h4>
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>RUC</th>
                                        <th>RAZON SOCIAL</th>
                                        <th>CORREO</th>
                                        <th>TELEFONO</th>
                                        <th>DIRECCION</th>
                                        <th>METODO DE PAGO</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $consulta = "SELECT * FROM proveedor";
                                    $ejecutar = mysqli_query($conexion, $consulta);
                                    $contador = 1; // Inicializar el contador fuera del bucle

                                    while ($respuesta = mysqli_fetch_array($ejecutar)) {
                                        echo "<tr>";
                                        echo "<td>".$contador."</td>";
                                        echo "<td>".$respuesta['id']."</td>";
                                        echo "<td>".$respuesta['ruc']."</td>";
                                        echo "<td>".$respuesta['razon_social']."</td>";
                                        echo "<td>".$respuesta['correo']."</td>";
                                        echo "<td>".$respuesta['telefono']."</td>";
                                        echo "<td>".$respuesta['direccion']."</td>";
                                        echo "<td>".$respuesta['metodo_pago']."</td>";
                                        echo "<td><button class='btn btn-success'>Editar</button><button class='btn btn-danger'>Eliminar</button></td>";
                                        echo "</tr>";

                                        $contador++; // Incrementar el contador en cada iteración
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
<!--FIN DE CONTENIDO-->

<script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
<script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
<script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
<script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
<script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

<!-- App js -->
<script src="plantilla/Admin/vertical/assets/js/theme.js"></script>
</body>
</html>
