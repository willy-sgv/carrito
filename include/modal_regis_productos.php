<button type="button" class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target=".registrar">+ Nuevo</button>

 <div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">REGISTRAR NUEVO PRODUCTO</h5>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            <form action="operaciones/registrarProducto.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CODIGO:</label>
                                    <input type="number" name="codigo"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DESCRIPCION:</label>
                                    <input type="text" name="descripcion"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DETALLE:</label>
                                    <input type="text" name="detalle"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CATEGORIA:</label>
                                    <select name="id_categoria" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option value=""></option>
                                        <?php $b_categoria ="SELECT * FROM categoria";
                                        $r_b_categoria = mysqli_query($conexion, $b_categoria);
                                        while ($datos_categoria = mysqli_fetch_array($r_b_categoria)){?>
                                                <option value="<?php echo $datos_categoria['id']; ?>"><?php echo $datos_categoria['nombre']; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">PRECIO COMPRA:</label>
                                    <input type="number" name="precio_compra"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">PRECIO VENTA:</label>
                                    <input type="number" name="precio_venta"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">STOCK:</label>
                                    <input type="text" name="stock"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                <label class="col-lg-2 col-md-2 col-sm-12">ESTADO:</label>
                                    <select name="estado" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    <option>Seleccione Estado </option>
                                    <option>1</option>
                                    <option>2</option>
                                    </select>
                                 </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">IMAGEN:</label>
                                    <input type="file" name="foto" class="form-control col-lg-4 col-md-4 col-sm-12" required accept="image/*">
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">PROVEEDOR:</label>
                                    <select name="id_proveedor" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option value=""></option>
                                        <?php $b_proveedor ="SELECT * FROM proveedor";
                                        $r_b_proveedor = mysqli_query($conexion, $b_proveedor);
                                        while ($datos_proveedor = mysqli_fetch_array($r_b_proveedor)){?>
                                                <option value="<?php echo $datos_proveedor['id']; ?>"><?php echo $datos_proveedor['ruc']; ?></option>
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