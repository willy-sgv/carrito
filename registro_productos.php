<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    //lenguaje en php
    include("include/menu.php");
    ?>
    <!-- inicio de contenido -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>Registro de Productos</h4>
                        <div class="card">
                            <div class="card-body">
                            <form action="operaciones/registrar_usuario.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CODIGO DE BARRA: </label>
                                    <input type="number" name="codigo_barra" 
                                    placeholder="Ingrese el codigo de barra" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">PRODUCTO: </label>
                                    <input type="text" name="producto" 
                                    placeholder="Ingrese el nombre del producto" class="form-control col-lg-8 col-md-8 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">MARCA: </label>
                                    <input type="text" name="marca" 
                                    placeholder="Ingrese Correo" class="form-control col-lg-8 col-md-8 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">PRESENTACION: </label>
                                    <input type="number" name="presentacion" 
                                    placeholder="Ingrese Teléfono" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">STOCK: </label>
                                    <input type="number" name="stock" 
                                    placeholder="Ingrese Direccion" class="form-control col-lg-8 col-md-8 col-sm-12" requird>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">PRECIO DE VENTA: </label>
                                    <input type="number" name="precio_venta" 
                                    placeholder="Ingrese Fecha de Nacimiento" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">IMAGEN DEL PRODUCTO: </label>
                                    <input type="file" name="fecha_nacimiento" 
                                    placeholder="Ingrese Fecha de Nacimiento" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                                    
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin de contenido -->
    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>