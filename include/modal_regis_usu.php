<button type="button" class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target=".registrar">Registra Nuevo Usuario</button>

 <div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Registrar Nuevo Usuario</h5>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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