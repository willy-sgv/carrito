
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
                        <h4>Registro de Clientes</h4>
                        <div class="card">
                            <div class="card-body">
                            <form action="operaciones/registrar_usuario.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">Nº: </label>
                                    <input type="number" name="dni" 
                                    placeholder="Ingrese DNI" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CLIENTE: </label>
                                    <input type="text" name="nombres_apellidos" 
                                    placeholder="Ingrese el Nombre del Cliente" class="form-control col-lg-8 col-md-8 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DNI: </label>
                                    <input type="text" name="correo" 
                                    placeholder="Ingrese el Dni" class="form-control col-lg-8 col-md-8 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">TELEFONO: </label>
                                    <input type="number" name="telefono" 
                                    placeholder="Ingrese Teléfono" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">ESTADO:</label>
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <select name="estado_cliente" class="form-control" required>
                                            <option value="activo">Activo</option>
                                            <option value="inactivo">Inactivo</option>
                                        </select>
                                    </div>
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