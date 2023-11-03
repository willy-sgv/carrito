<body>
    <?php
    include("../include/menu.php");
    ?>

    <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>Lista de Productos</h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-right">
                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#exampleModal">Registrar Productos</button>
                                </div><br>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                            <th>COD</th>
                                            <th>DESCRIPCION</th>                                      
                                            <th>DETALLE</th>
                                            <th>CATEGORIA</th>
                                            <th>PRECIO COMPRA</th>
                                            <th>PRECIO VENTA</th>
                                            <th>STOCK</th>
                                            <th>ESTADO</th>
                                            <th>PROVEEDOR</th>
                                            <th>IMAGEN</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "../include/conexion.php";
                                        $consulta = "SELECT
    producto.id, 
    producto.codigo, 
    producto.descripcion, 
    producto.detalle, 
    producto.id_categoria, 
    producto.precio_compra, 
    producto.precio_venta, 
    producto.stock, 
    producto.estado, 
    producto.imagen, 
    producto.id_proveedor, 
    proveedor.razon_social, 
    categoria.nombre
FROM
    producto
    INNER JOIN
    proveedor
    ON 
        producto.id_proveedor = proveedor.id
    INNER JOIN
    categoria
    ON 
        producto.id_categoria = categoria.id";
                                        $resultado = mysqli_query($conexion, $consulta);
                                        while ($fila = mysqli_fetch_assoc($resultado)) {
                                            echo '<tr>';
                                            echo '<td>' . $fila['id'] . '</td>';
                                            echo '<td>' . $fila['codigo'] . '</td>';
                                            echo '<td>' . $fila['descripcion'] . '</td>';
                                            echo '<td>' . $fila['detalle'] . '</td>';
                                            echo '<td>' . $fila['nombre'] . '</td>';
                                            echo '<td>' . $fila['precio_compra'] . '</td>';
                                            echo '<td>' . $fila['precio_venta'] . '</td>';
                                            echo '<td>' . $fila['stock'] . '</td>';
                                            echo '<td>' . ($fila['estado'] == 1 ? 'Activo' : 'Inactivo') . '</td>';
                                            echo '<td>' . $fila['razon_social'] . '</td>';
                                            echo '<td><img src="../imagen/' . $fila['imagen'] . '" alt="Imagen" width="50" data-toggle="modal" data-target="#modalImagen' . $fila['id'] . '"></td>';
                                            echo '<td>';
                                            echo '<a href="editar_usuario.php?id=' . $fila['id'] . '" class="btn btn-primary btn-sm">Editar</a>';
                                            echo ' ';
                                            echo '<a href="eliminar_usuario.php?id=' . $fila['id'] . '" class="btn btn-danger btn-sm">Eliminar</a>';
                                            echo '</td>';
                                            echo '</tr>';
                                            echo '<div class="modal fade" id="modalImagen' . $fila['id'] . '" tabindex="-1" role="dialog" aria-labelledby="modalImagenLabel' . $fila['id'] . '" aria-hidden="true">';
                                            echo '<div class="modal-dialog" role="document">';
                                            echo '<div class="modal-content">';
                                            echo '<div class "modal-header">';
                                            echo '<h5 class="modal-title" id="modalImagenLabel' . $fila['id'] . '">Imagen del Producto</h5>';
                                            echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                                            echo '<span aria-hidden="true">&times;</span>';
                                            echo '</button>';
                                            echo '</div>';
                                            echo '<div class="modal-body text-center">';
                                            echo '<img src="../imagen/' . $fila['imagen'] . '" alt="Imagen" width="400px">';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                        ?>

                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>COD</th>
                                            <th>DESCRIPCION</th>                                      
                                            <th>DETALLE</th>
                                            <th>CATEGORIA</th>
                                            <th>PRECIO COMPRA</th>
                                            <th>PRECIO VENTA</th>
                                            <th>STOCK</th>
                                            <th>ESTADO</th>
                                            <th>PROVEEDOR</th>
                                            <th>IMAGEN</th>
                                            <th></th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Registrar de Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="../operaciones/registrar_producto.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el codigo de barra" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese la descripcion" required>
                        </div>
                        <div class="form-group">
                            <label for="detalle">Detalle</label>
                            <input type="text" class="form-control" id="detalle" name="detalle" placeholder="Ingrese el detalle del Producto" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select class="form-control" id="categoria" name="categoria" required>
                                <option value="" disabled selected>Selecciona una categoría</option>
                                <?php

                                $conexion = new mysqli("localhost", "root", "root", "carrito_2");

                                if ($conexion->connect_error) {
                                    die("Error en la conexión: " . $conexion->connect_error);
                                }

                                $sql = "SELECT nombre FROM categoria";
                                $resultado = $conexion->query($sql);
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<option value='" . $fila["nombre"] . "'>" . $fila["nombre"] . "</option>";
                                }
                                ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="precio_compra">Precio de Compra</label>
                            <input type="number" class="form-control" id="precio_compra" name="precio_compra" placeholder="Ingrese el precio de la compra" required>
                        </div>

                        <div class="form-group">
                            <label for="precio_venta">Precio de Venta</label>
                            <input type="number" class="form-control" id="precio_venta" name="precio_venta" placeholder="Ingrese el precio de la venta" required>
                        </div>

                        
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingrese el Stock" required>
                        </div>



                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select class="form-control" id="estado" name="estado" required>
                                <option value="" disabled selected>Seleccione el estado del stock</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="proveedor">Proveedor</label>
                            <select class="form-control" id="proveedor" name="proveedor" required>
                                <option value="" disabled selected>Selecciona un proveedor</option>
                                <?php
                                $conexion = new mysqli("localhost", "root", "root", "carrito_2");

                                if ($conexion->connect_error) {
                                    die("Error en la conexión: " . $conexion->connect_error);
                                }
                                $sql = "SELECT razon_social FROM proveedor";
                                $resultado = $conexion->query($sql);
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<option value='" . $fila["razon_social"] . "'>" . $fila["razon_social"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" placeholder="Ingrese el stock del producto" required>
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