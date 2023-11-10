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
                    <h4>REGISTRO DE USUARIOS</h4>
                    <div class="card">
                        <div class="card-body">
                            <form action="operaciones/registarUsario.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DNI:</label>
                                    <input type="number" name="dni"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">APELIDOS Y NOMBRE:</label>
                                    <input type="text" name="apellidosNombres"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CORREO:</label>
                                    <input type="email" name="correo"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">TELEFONO:</label>
                                    <input type="number" name="telefono"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DIRECCION:</label>
                                    <input type="text" name="direccion"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">FECHA NACIMIENTO:</label>
                                    <input type="date" name="fechaNacimiento"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">FOTO:</label>
                                    <input type="file" name="foto"class="form-control col-lg-4 col-md-4 col-sm-12" required accept="image/*">
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">ROL:</label>
                                    <select name="id_rol" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option value=""></option>
                                        <?php $b_roles ="SELECT * FROM roles";
                                        $r_b_roles = mysqli_query($conexion, $b_roles);
                                        while ($datos_roles = mysqli_fetch_array($r_b_roles)){?>
                                                <option value="<?php echo $datos_roles['id']; ?>"><?php echo $datos_roles['nombre']; ?></option>
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