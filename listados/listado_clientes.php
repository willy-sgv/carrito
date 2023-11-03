<body>
    <?php
    include("../include/menu.php");
    ?>

    <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>Lista de Clientes</h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-right">
                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#exampleModal">Registrar Proveedor</button>
                                </div><br>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>DOCUMENTO</th>
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
                                        include "../include/conexion.php";
                                        $consulta = "SELECT id, ruc_dni, razon_social, telefono, correo, direccion, direccion_envio FROM cliente";
                                        $resultado = mysqli_query($conexion, $consulta);
                                        while ($fila = mysqli_fetch_assoc($resultado)) {
                                            echo '<tr>';
                                            echo '<td>' . $fila['id'] . '</td>';
                                            echo '<td>' . $fila['ruc_dni'] . '</td>';
                                            echo '<td>' . $fila['razon_social'] . '</td>';
                                            echo '<td>' . $fila['correo'] . '</td>';
                                            echo '<td>' . $fila['telefono'] . '</td>';
                                            echo '<td>' . $fila['direccion'] . '</td>';
                                            echo '<td>' . $fila['direccion_envio'] . '</td>';
                                            echo '<td>';
        echo '<a href="#.php?id=' . $fila['id'] . '" class="btn btn-primary btn-sm">Editar</a>';
        echo ' ';
        echo '<a href="#?id=' . $fila['id'] . '" class="btn btn-danger btn-sm">Eliminar</a>';
        echo '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>DOCUMENTO</th>
                                            <th>RAZON SOCIAL</th>
                                            <th>TELEFONO</th>
                                            <th>CORREO</th>
                                            <th>DIRECCION</th>
                                            <th>DIRECCION DE ENVIO</th>
                                            <th>ACIONES</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="../operaciones/registrar_cliente.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="RUC">Documento de Identidad</label>
                            <input type="number" class="form-control" id="ruc_dni" name="ruc_dni" placeholder="Ingrese su numero de ruc o dni" required>
                        </div>
                        <div class="form-group">
                            <label for="Razon Social">Razon Social</label>
                            <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Ejm Unidad" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion_envio">Direccion de envio</label>
                            <input type="text" class="form-control" id="direccion_envio" name="direccion_envio" placeholder="Ingrese su direccion de envio" required>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>
</body>

</html>