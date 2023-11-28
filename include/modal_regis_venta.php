<button type="button" class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target=".registrar">Registra Nuevo Usuario</button>

 <div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Registrar Nueva Venta</h5>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="operaciones/registroClientes.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">SERIE VENTA:</label>
                                    <input type="number" name="fecha"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">NUMERO VENTA:</label>
                                    <input type="number" name="hora"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">FECHA/HORA DE LA VENTA:</label>
                                    <input type="datetime" name="codigo"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">MONTO TOTAL:</label>
                                    <input type="number" name="cantidad"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CLIENTE:</label>
                                    <select name="id_cliente" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option value=""></option>
                                        <?php $b_cliente ="SELECT * FROM cliente";
                                        $r_b_cliente = mysqli_query($conexion, $b_cliente);
                                        while ($datos_cliente = mysqli_fetch_array($r_b_cliente)){?>
                                                <option value="<?php echo $datos_cliente['id']; ?>"><?php echo $datos_cliente['ruc_dni']; ?></option>
                                        <?php }
                                        ?>
                                    </select>
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