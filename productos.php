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
                <?php include("include/modal_regis_productos.php"); ?> 
                                       <h4>LISTADO DE PRODUCTOS</h4>
                    <div class="card">
                        <div class="card-body">
                            
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    
                                    <th>CODIGO</th>
                                    <th>DESCRIPCION</th>
                                    <th>DETALLE</th>
                                    <th>CATEGORIA</th>
                                    <th>PRECIO COMPRA</th>
                                    <th>PRECIO VENTA</th>
                                    <th>STOCK</th>
                                    <th>ESTADO</th>
                                    <th>IMAGEN</th>
                                    <th>PROVEEDOR</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $consulta= "SELECT * FROM pedidos";
                                    $ejecutar= mysqli_query($conexion, $consulta);
                                    $contador= 0;
                                    while ($respuesta= mysqli_fetch_array($ejecutar)) {
                                        $contador= 1;
                                        
                                        echo "<br>";
                                        echo "<td>".$contador."</td>";
                                        echo "<td>".$respuesta['codigo']."</td>";
                                        echo "<td>".$respuesta['descripcion']."</td>";
                                        echo "<td>".$respuesta['detalle']."</td>";
                                        echo "<td>".$respuesta['id_categoria']."</td>";
                                        echo "<td>".$respuesta['precio_compra']."</td>";
                                        echo "<td>".$respuesta['precio_venta']."</td>";
                                        echo "<td>".$respuesta['stock']."</td>";
                                        echo "<td>".$respuesta['estado']."</td>";
                                        echo "<td>".$respuesta['imagen']."</td>";
                                        echo "<td>".$respuesta['id_proveedor']."</td>";
                                       
                                        
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

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>
</body>
</html>