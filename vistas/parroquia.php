<?php
require_once '../entidades/tbl_parroquia.php';
require_once '../datos/dt_tbl_parroquia.php';
require_once '../controladores/parroquiaControllerr.php';

$tu = new tbl_parroquia();
$dtu = new dt_tbl_parroquia();
$cu = new parroquiaController();


if (isset($_GET['idParroquia'])) {
    $idParroquia = $_GET['idParroquia'];
    $dtu->eliminarParroquia($idParroquia);
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
        <h1>Parroquias</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Parroquias</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Parroquias Agregadas</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Parroco</th>
                                <th>Logo</th>
                                <th>Sitio Web</th>
                                <th>Acción</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($dtu->listarParroquia() as $r):
                                ?>
                                <tr>
                                    <td><?php echo $r->getIdParroquia(); ?></td>
                                    <td><?php echo $r->getNombre(); ?></td>
                                    <td><?php echo $r->getDireccion(); ?></td>
                                    <td><?php echo $r->getTelefono(); ?></td>
                                    <td><?php echo $r->getParroco(); ?></td>
                                    <td><img src="assets/img/<?php echo $r->getLogo(); ?>" width="50px" height="50px">
                                    </td>
                                    <td><?php echo $r->getSitioWeb(); ?></td>
                                    <td>
                                        <a href="editar_parroquia.php?idParroquia=<?php echo $r->getIdParroquia(); ?>">
                                            <button type="button" class="bi bi-pencil-square" title="Editar Parroquia">
                                                Editar
                                            </button>
                                        </a>
                                        <a href="parroquia.php?idParroquia=<?php echo $r->getIdParroquia(); ?>">
                                            <button type="button" class="bi bi-trash3" title="Eliminar Parroquia">
                                                Eliminar
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
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