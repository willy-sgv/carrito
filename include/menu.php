    <!--Inicio Menu-->

    <header id="page-topbar align-items-center">
        <div class="navbar-header">
            <div class="d-flex align-items-left"> 
            <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>   
            </div>
            <div class="d-flex align-items-center">

                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)"><i class="feather-user"></i>Mi perfil</a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)"><i class="feather-power"></i>Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </header> 
    

    <div class="vertical-menu">
        <div data-simplebear class="h-100">
            <div class="navbar-brand-box">
                <a href="" class="logo">
                    VETMay
                </a>
            </div>
            <div id="sidebar-menu">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menú</li>
                    <li>
                        <a href="login/index.php" class="waves-effect"><i class="feather-home"></i>Inicio</a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-cogs"></i>Ventas</a>
                        <ul>
                        <li><a href="ventas.php">Ventas</a></li>
                        <li><a href="detalle_venta.php">Detalle venta</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="productos.php" class="waves-effect"><i class="feather-shopping-bag"></i>Productos</a>
                    </li>
                    <li>
                        <a href="formulario.php" class="waves-effect"><i class="feather-users"></i>Usuarios</a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect "><i class="fas fa-cogs"></i>Pedidos</a>
                        <ul>
                        <li><a href="pedidos.php">Pedido</a></li>
                        <li><a href="detalle_pedido.php">Detalle Pedido</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="clientes.php" class="waves-effect"><i class="feather-user-plus"></i>Clientes</a>
                    </li>
                    <li>
                        <a href="reporte.php" class="waves-effect"><i class="fas fa-chart-line"></i>Reportes</a>
                    </li>
                    <li>
                        <a href="proveedores.php" class="waves-effect"><i class="fas fa-user-tie"></i>Proveedores</a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-cogs"></i>Mantenimiento</a>
                        <ul>
                        <li><a href="sistema.php">Sistema</a></li>
                        <li><a href="roles.php">Roles</a></li>
                        <li><a href="datos_empresa.php">Datos Empresa</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>   
    <!--Fin Menu-->