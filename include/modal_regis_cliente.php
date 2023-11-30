<button type="button" class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target=".registrar">Registra Nuevo Usuario</button>

 <div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Registrar Nuevo Cliente</h5>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="operaciones/registroClientes.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">RUC/DNI:</label>
                                    <input type="number" name="ruc_dni"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">RAZON SOCIAL:</label>
                                    <input type="text" name="razon_social"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">TELEFONO</label>
                                    <input type="number" name="telefono"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CORREO</label>
                                    <input type="email" name="correo"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DIRECCION:</label>
                                    <input type="text" name="direccion"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DIRECCION DE ENVIO</label>
                                    <input type="text" name="direccion_envio"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                
                                
                              

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                        <button type="submit" class="btn btn-dark">REGISTRAR</button>
                                    
                                </div>
                            </form>
            </div>
         </div>
    </div>
</div>