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
                <?php include("include/modal_regis_provee.php"); ?> 
                                       <h4>LISTADO DE PEDIDOS</h4>
                    <div class="card">
                        <div class="card-body">
                            
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    
                                    <th>RUC</th>
                                    <th>RAZON SOCIAL</th>
                                    <th>EMAIL</th>
                                    <th>TELEFONO</th>
                                    <th>DIRECCION</th>
                                    <th>METODO DE PAGO</th>
                                  
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
                                        echo "<td>".$respuesta['id_cliente']."</td>";
                                        echo "<td>".$respuesta['fecha_hora_pedido']."</td>";
                                        echo "<td>".$respuesta['fecha_entrega']."</td>";
                                        echo "<td>".$respuesta['metodo_pago']."</td>";
                                        echo "<td>".$respuesta['monto']."</td>";
                                        echo "<td>".$respuesta['comprobante']."</td>";
                                        echo "<td>".$respuesta['estado']."</td>";
                                       
                                        
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