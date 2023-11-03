
<body>
    <?php
    include("../include/menu.php");
    ?>

    <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>Lista de Proveedores</h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-right">
                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#exampleModal">Registrar Proveedor</button>
                                </div><br>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>RUC</th>
                                            <th>RAZON SOCIAL</th>
                                            <th>CORREO</th>
                                            <th>TELEFONO</th>
                                            <th>DIRECCION</th>
                                            <th>METODO PAGO</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php
    include "../include/conexion.php"; 
    $consulta = "SELECT id, ruc, razon_social, correo, telefono, direccion, metodo_pago FROM proveedor";
    $resultado = mysqli_query($conexion, $consulta);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>';
        echo '<td>' . $fila['id'] . '</td>';
        echo '<td>' . $fila['ruc'] . '</td>';
        echo '<td>' . $fila['razon_social'] . '</td>';
        echo '<td>' . $fila['correo'] . '</td>';
        echo '<td>' . $fila['telefono'] . '</td>';
        echo '<td>' . $fila['direccion'] . '</td>';
        echo '<td>' . $fila['metodo_pago'] . '</td>';
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
                                            <th>RUC</th>
                                            <th>RAZON SOCIAL</th>
                                            <th>CORREO</th>
                                            <th>TELEFONO</th>
                                            <th>DIRECCION</th>
                                            <th>METODO PAGO</th>
                                            <th>ACCIONES</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="../operaciones/registrar_proveedor.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="RUC">RUC</label>
                            <input type="number" class="form-control" id="ruc" name="ruc" placeholder="Ingrese su numero de ruc" required>
                        </div>
                        <div class="form-group">
                            <label for="Razon Social">Razon Social</label>
                            <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Ejm Unidad" required>
                        </div>
                        <div class="form-group">
                            <label for="Correo">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su Correo" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion" required>
                        </div>
                        <div class="form-group">
                            <label for="metodo_pago">Metodo de Pago</label>
                            <input type="text" class="form-control" id="metodo_pago" name="metodo_pago" placeholder="Ingrese su metodo de pago" required>
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
