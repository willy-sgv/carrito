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
                    <?php include("include/modal_regis_usu.php"); ?> 
                                       <h4>LISTADO DE USUARIOS</h4>
                    <div class="card">
                        <div class="card-body">
                            
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>ORDEN</th>
                                    <th>FOTO</th>
                                    <th>DNI</th>
                                    <th>NOMBRES Y APELLLIDOS</th>
                                    <th>CORREO</th>
                                    <th>TELEFONO</th>
                                    <th>DIRECCION</th>
                                    <th>ESTADO</th>
                                    <th>ROL</th>
                                    <th>ACCIONES</th>
                                    
                                

                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $consulta= "SELECT * FROM usuario";
                                    $ejecutar= mysqli_query($conexion, $consulta);
                                    $contador= 0;
                                    while ($respuesta= mysqli_fetch_array($ejecutar)) {
                                        $contador= 1;
                                        
                                        echo "<br>";
                                        echo "<td>".$contador."</td>";
                                        echo "<td>".$respuesta['fotos']."</td>";
                                        echo "<td>".$respuesta['dni']."</td>";
                                        echo "<td>".$respuesta['apellidos_nombres']."</td>";
                                        echo "<td>".$respuesta['correo']."</td>";
                                        echo "<td>".$respuesta['telefono']."</td>";
                                        echo "<td>".$respuesta['direccion']."</td>";
                                        echo "<td>".$respuesta['activo']."</td>";
                                        echo "<td>".$respuesta['id_rol']."</td>";
                                        
                                        echo "<br><button class='btn btn-success'>Editar</button><button class='btn btn-danger'>Eliminar</button>";



                                        echo "</br>";
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