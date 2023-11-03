
<?php
 include("include/menu.php");
?>
<body>

    <!-- Begin page -->
    <div id="layout-wrapper">


        <div class="main-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card bg-primary border-primary">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-light float-right">Ventas</span>
                                        <h5 class="card-title mb-0 text-white">Ventas totales</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0 text-white">
                                                S/ 17.21
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-white-50">12.5% <i class="mdi mdi-arrow-up"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress badge-soft-light shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-light" role="progressbar" style="width: 38%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card bg-success border-success">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-light float-right">Devoluciones</span>
                                        <h5 class="card-title mb-0 text-white">Devoluciones Totales</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center text-white mb-0">
                                                15
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-white-50">18.71% <i class="mdi mdi-arrow-down"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress badge-soft-light shadow-sm" style="height: 7px;">
                                        <div class="progress-bar bg-light" role="progressbar" style="width: 38%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card bg-warning border-warning">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-light float-right">Ganancias</span>
                                        <h5 class="card-title mb-0 text-white">Ganancias Totales</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center text-white mb-0">
                                                $784.62
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-white-50">57% <i class="mdi mdi-arrow-up"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress badge-soft-light shadow-sm" style="height: 7px;">
                                        <div class="progress-bar bg-light" role="progressbar" style="width: 68%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card bg-info border-info">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-light float-right">Clientes</span>
                                        <h5 class="card-title mb-0 text-white">Clientes Totales</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center text-white mb-0">
                                                276
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-white-50">17.8% <i class="mdi mdi-arrow-down"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress badge-soft-light shadow-sm" style="height: 7px;">
                                        <div class="progress-bar bg-light" role="progressbar" style="width: 57%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div>
                    
            

               

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2019 © Xacton.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Myra
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
   


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- Morris Js-->
    <script src="../plugins/morris-js/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="../plugins/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js-->
    <script src="assets/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>