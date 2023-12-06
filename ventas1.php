<?php include("include/conexion.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Willy</title>

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
<?php
include('include/menu.php');
?>
<!--INICIO DE CONTENIDO-->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!--conteiner solo se usa el 80% de la pantalla conteiner-fluid ocupa todo-->
            <div class="row"><!--row ayuda a ser responsive pero en bootstrap-->
                <div class="col-12">

                   
                    <h4>REGISTRAR NUEVA VENTA</h4>
                    <a href="ventas1.php" class="btn btn-success">+Nuevo</a>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <form action="">
                                    <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-6">DNI:</label>
                                    <input type="number" name="dni"class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder="dni cliente">
                                    <label class="col-lg-1 col-md-1 col-sm-1"></label>
                                    <button class="btn btn-info col-lg-1 col-md-1 col-sm-2">Buscar</button>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-6">APELLIDOS Y NOMBRES:</label>
                                    <input type="text" name="nombres"class="form-control col-lg-6 col-md-6 col-sm-12" readonly>
                                  
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
                                    <input type="number" name="producto"class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder="codigo producto">
                                    <label class="col-lg-1 col-md-1 col-sm-1"></label>
                                    <button class="btn btn-info col-lg-1 col-md-1 col-sm-2">Buscar</button>
                                </div>
                                
                                
                                    </form>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">

                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th colspan="6" class="text-center">PRODUCTOS</th>
                                        </tr>
                                        <tr>
                                            <th width="5%">Nro</th>
                                            <th width="60%">Descripcion</th>
                                            <th width="10%">Cantidad</th>
                                            <th width="10%">P.Unit</th>
                                            <th width="10%">Importe</th>
                                            <th width="5%"></th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>I</td>
                                        <td>Nombre Producto</td>
                                        <td><input type="number" value="2"></td>
                                        <td>S/. 50.00</td>
                                        <td>S/. 100.00</td>
                                        <td><button class="btn btn-danger">X</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-center">Total</td>
                                            <td>S/. 100.00</td>
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
<!--FIN DE CONTENIDO-->


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