<?php
include('include/conexion.php');
session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" type="text/css">
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

    <!-- Script obtenido desde CDN jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <style>
        .cantidad {
            width: 3em;
        }
    </style>
</head>


<body>
    <?php
    // lenguaje en php
    include("include/menu.php");
    ?>
    <!-- INICIO DE CONTENIDO -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>Registrar Nueva Venta</h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <form role="form" id="myform" action="" class="form-horizontal form-label-left input_mask" method="POST">



                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">DNI: </label>
                                                <input type="number" name="dni" class="form-control col-lg-2 col-md-2 col-sm-6" required placeholder="dni cliente">
                                                <label class="col-lg-1 col-md-1 col-sm-1"></label>
                                                <button class="btn btn-info col-lg-1 col-md-1 col-sm-2">Buscar</button>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">Apellidos y Nombres: </label>
                                                <input type="text" id="nombres" class="form-control col-lg-6 col-md-6 col-sm-12" readonly>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">Usuario: </label>
                                                <select name="usuario" id="usuario" class="form-control col-lg-6 col-md-6 col-sm-12">
                                                    <option value="1">Usuario 1</option>
                                                    <option value="2">Usuario 2</option>
                                                    <option value="3">Usuario 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">producto: </label>
                                                <input type="number" name="producto" id="producto" class="form-control col-lg-2 col-md-2 col-sm-6" required placeholder="código producto">
                                                <label class="col-lg-1 col-md-1 col-sm-1"></label>
                                                <button type="button" class="btn btn-info" onclick="agregar_producto();">Agregar Producto</button>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-6">Fecha y Hora: </label>
                                                <label for="" class="form-control col-lg-2 col-md-2 col-sm-6">
                                                    <?php
                                                    date_default_timezone_set("America/Lima");
                                                    echo date("d-m-Y h:i:s"); ?>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th colspan="6" class="text-center">PRODUCTOS</th>
                                                </tr>
                                                <tr>
                                                    <th width="5%">Nro</th>
                                                    <th width="60%">Descripción</th>
                                                    <th width="10%">Cant.</th>
                                                    <th width="10%">P.unit.</th>
                                                    <th width="10%">Importe</th>
                                                    <th width="5%"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="detalle_productos">
                                                <input type="hidden" name="array_productos" id="array_productos" value="">
                                                    <?php
                                                    $cont = 0;
                                                    $suma_total = 0;
                                                    $tabla = "";
                                                    foreach ($_SESSION['productos'] as $key => $value) {
                                                        $b_producto = "SELECT * FROM producto WHERE id='$key'";
                                                        $ejec_b_prod = mysqli_query($conexion, $b_producto);
                                                        $r_b_producto = mysqli_fetch_array($ejec_b_prod);
                                                        $cont++;
                                                        $tabla .= "<tr>";
                                                        $importe = $r_b_producto['precio_venta']*$value;
                                                        $suma_total += $importe;
                                                        $tabla .= "<td>".$cont."</td><td>".$r_b_producto['descripcion']."</td><td><input type='number' id='".$r_b_producto['id']."' onchange='agregar_cantidad(".$r_b_producto['id'].")' class='form-control' value='".$value."' ></td><td>".$r_b_producto['precio_venta']."</td><td>".$importe."</td><td><button class='btn btn-danger'>X</button></td>";
                                                        $tabla .= "</tr>";
                                                    }
                                                    $tabla .= "<tr><td colspan='4' class='text-center'>TOTAL</td><td>".$suma_total."</td></tr>";
                                                    echo $tabla;
                                                    ?>
                                                    
                                            </tbody>
                                        </table>

                                        <?php
                                                 var_dump($_SESSION['productos']);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FIN DE CONTENIDO -->

    <!-- jQuery  -->
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

    
    <script type="text/javascript">
        function agregar_producto() {
            var array = $('#array_productos').val();
            var producto = $('#producto').val();
            $.ajax({
                type: "POST",
                url: "operaciones/generar_lista_prueba.php",
                data: {
                    lista: array,
                    elemento: producto
                },
                success: function(r) {
                    
                    $('#detalle_productos').html(r);
                }
            });
            document.getElementById('producto').value = '';
        }
    </script>
    <script type="text/javascript">
        function agregar_cantidad(id) {
            var cantidad = $('#'+id).val();
            $.ajax({
                type: "POST",
                url: "operaciones/agregar_cantidad_prueba.php",
                data: {
                    producto: id,
                    cant: cantidad
                },
                success: function(r) {
                    
                    $('#detalle_productos').html(r);
                }
            });
        }
    </script>



</body>

</html>