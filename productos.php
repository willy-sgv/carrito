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
        <div class="container-fluid"> <!--conteiner solo se usa el 80% de la pantalla conteiner-fluid ocupa todo-->
            <div class="row"><!--row ayuda a ser responsive pero en bootstrap-->
                <div class="col-12">
                    <h4>REGISTRO DE PRODUCTOS</h4>
                    <div class="card">
                        <div class="card-body">
                            <form action="operaciones/registrarProducto.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CODIGO:</label>
                                    <input type="number" name="codigo"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DESCRIPCION:</label>
                                    <input type="text" name="descripcion"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DETALLE:</label>
                                    <input type="text" name="detalle"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CATEGORIA:</label>
                                    <select name="id_categoria" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option value=""></option>
                                        <?php $b_categoria ="SELECT * FROM categoria";
                                        $r_b_categoria = mysqli_query($conexion, $b_categoria);
                                        while ($datos_categoria = mysqli_fetch_array($r_b_categoria)){?>
                                                <option value="<?php echo $datos_categoria['id']; ?>"><?php echo $datos_categoria['nombre']; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">PRECIO COMPRA:</label>
                                    <input type="number" name="precio_compra"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">PRECIO VENTA:</label>
                                    <input type="number" name="precio_venta"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">STOCK:</label>
                                    <input type="text" name="stock"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">ESTADO:</label>
                                    <input type="text" name="estado"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">IMAGEN:</label>
                                    <input type="file" name="foto" class="form-control col-lg-4 col-md-4 col-sm-12" required accept="image/*">
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">PROVEEDOR:</label>
                                    <select name="id_proveedor" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option value=""></option>
                                        <?php $b_proveedor ="SELECT * FROM proveedor";
                                        $r_b_proveedor = mysqli_query($conexion, $b_proveedor);
                                        while ($datos_proveedor = mysqli_fetch_array($r_b_proveedor)){?>
                                                <option value="<?php echo $datos_proveedor['id']; ?>"><?php echo $datos_proveedor['ruc']; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                        <button type="submit" class="btn btn-dark">GUARDAR</button>
                                    
                                </div>
                            </form>
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