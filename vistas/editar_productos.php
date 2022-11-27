<?php

require_once '../entidades/tbl_productos.php';
require_once '../datos/dt_tbl_productos.php';
require_once '../controladores/productosController.php';

$dtp = new dt_tbl_productos();

$Id = 0;
if(isset($Id))
{
    $Id = $_GET['id_producto'];
}

$data_producto = $dtp->mostrarProducto($Id);

if(isset($_POST['m'])){
    $metodo = $_POST['m'];
    if(method_exists("productosController",$metodo))
    {
        productosController::{$metodo}();
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.4.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">NiceAdmin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php
include("shared/navbar.php");
?>
<!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Editar producto</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Seguridad</li>
                <li class="breadcrumb-item active">Editar producto</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="POST">
                    <div class="row mb-3">
                        <input type="hidden" value="<?php echo $data_producto->getIdProducto(); ?>" name="id_producto"/>

                        <label class="col-sm-2 col-form-table">ID Comunidad:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id_comunidad" value="<?php echo $data_producto->getIdComunidad();?>" />
                        </div>

                    </div>
                    <div class="row mb-3">

                        <label class="col-sm-2 col-form-table">ID Cat.Producto :</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_cat_producto" class="form-control" value="<?php echo $data_producto->getIdCatProducto(); ?>" />
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-table">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" class="form-control" value="<?php echo $data_producto->getNombre(); ?>" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-table">Descripcion:</label>
                        <div class="col-sm-10">
                            <input type="text" name="descripcion" class="form-control" value="<?php echo $data_producto->getDescripcion(); ?>" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-table">Cantidad:</label>
                        <div class="col-sm-10">
                            <input type="text" name="cantidad" class="form-control" value="<?php echo $data_producto->getCantidad(); ?>" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-table">Precio sugerido:</label>
                        <div class="col-sm-10">
                            <input type="text" name="preciov_sugerido" class="form-control" value="<?php echo $data_producto->getPreciovSugerido(); ?>" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Actualizar producto</button>
                            <input type="hidden" name="m" value="editarProducto">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include("shared/footer.php");
?>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>