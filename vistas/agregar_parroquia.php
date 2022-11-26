<?php

require_once '../entidades/tbl_parroquia.php';
require_once '../datos/dt_tbl_parroquia.php';
require_once '../controladores/parroquiaControllerr.php';

if (isset($_POST['m'])) {
    $metodo = $_POST['m'];
    if (method_exists("parroquiaController", $metodo)) {
        parroquiaController::{$metodo}();
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

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
            <img src="assets/img/logo2.jpg" alt="">
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
        <h1>Agregar Parroquia</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Agregar Parroquia</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <!-- Formulario para agregar Parroquia-->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Agregar datos de la Parroquia</h5>

                <!-- Floating Labels Form -->
                <form class="row g-3 needs-validation" novalidate method="POST">
                    <div class="col-md-12">
                        <input type="hidden" value="guardar" name="txtaccion"/>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="validationCustom01" id="floatingName"
                                   placeholder="Your Name" name="nombre" required>
                            <label for="floatingName" id="validationCustom01">Nombre</label>
                            <div class="valid-feedback">

                            </div>
                            <div class="invalid-feedback">
                                Rellena este campo
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="validationCustom02" id="floatingName"
                                   placeholder="Your Name" name="direccion" required>
                            <label for="floatingName" id="validationCustom02">Direccion</label>
                            <div class="valid-feedback">

                            </div>
                            <div class="invalid-feedback">
                                Rellena este campo
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="validationCustom03" id="floatingName"
                                   placeholder="Your Name" name="telefono" required>
                            <label for="floatingName" id="validationCustom03">Teléfono</label>
                            <div class="valid-feedback">

                            </div>
                            <div class="invalid-feedback">
                                Rellena este campo y/o ingresa un correo electrónico válido
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="validationCustom05" id="floatingPassword"
                                   placeholder="Password" name="parroco" required>
                            <label for="floatingPassword" id="validationCustom05">Parroco</label>
                            <div class="valid-feedback">

                            </div>
                            <div class="invalid-feedback">
                                Rellena este campo
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="validationCustom5" id="floatingName"
                                   placeholder="Your URL" name="sitio_web" required>
                            <span class="input-group-text" id="basic-addon3">https://independientesantafe.com//</span>
                            <label for="floatingName" id="validationCustom5">Sitio Web de la Parroquia</label>
                            <div class="valid-feedback">

                            </div>
                            <div class="invalid-feedback">
                                Rellena este campo
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <div class="col-sm-10">
                                <input id="validationCustom6" class="form-control" type="file" name="file" required/>

                                <span class="input-group-text" id="basic-addon3">Logo de La Parroquia</span>
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Ingresa tu logo
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary">Agregar Parroquia</button>
                        <input type="hidden" name="m" value="guardarParroquia">
                        <button type="button" class="btn btn-outline-secondary">Cancelar</button>
                    </div>
                </form><!-- End floating Labels Form -->
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include("shared/footer.php");
?>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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