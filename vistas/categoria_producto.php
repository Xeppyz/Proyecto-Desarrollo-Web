<?php
require_once '../entidades/tbl_categoria_producto.php';
require_once '../datos/dt_tbl_categoria_producto.php';
require_once '../controladores/categoriaProductoController.php';

$tcp = new tbl_categoria_producto();
$dtcp = new dt_tbl_categoria_producto();
$cpc = new categoriaProductoController();

if (isset($_GET['id_categoria_producto'])) {
    $id_categoria_producto = $_GET['id_categoria_producto'];
    $dtcp->eliminarCategoriaProducto($id_categoria_producto);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kermesse - Lista de Comunidades</title>
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
        <h1>Categoria productos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Seguridad</a></li>
                <li class="breadcrumb-item">Categoria productos</li>

            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categoria producto</h5>
                        <table class="table categoria_productoTable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Accion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($dtcp->listarCategoriaProducto() as $r):
                                ?>
                                <tr>
                                    <td><?php echo $r->getIdCategoriaProducto(); ?></td>
                                    <td><?php echo $r->getNombre(); ?></td>
                                    <td><?php echo $r->getDescripcion(); ?></td>
                                    <td>
                                        <a href="editar_categoria_producto.php?id_categoria_producto=<?php echo $r->getIdCategoriaProducto(); ?>">
                                            <i class="bi bi-pencil-square" title="Editar categoria producto"></i>
                                        </a>
                                        &nbsp;&nbsp;
                                        <a href="categoria_producto.php?id_categoria_producto=<?php echo $r->getIdCategoriaProducto(); ?>">
                                            <i class="bi bi-trash3" title="Editar categoria producto"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="agregar_categoria_producto.php">
                    <button type="button" class="btn btn-outline-primary">Agregar categoria producto</button>
                </a>
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
<script>
    import {DataTable} from "./assets/vendor/simple-datatables/simple-datatables";

    let categoria_productoTable = document.querySelector('.categoria_productoTable');
    let dataTable = new DataTable(".categoria_productoTable", {
        searchable: true,
        fixedHeight: true
    });
</script>

</body>

</html>