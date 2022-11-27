<?php
require_once('../entidades/tbl_productos.php');
require_once('../datos/dt_tbl_productos.php');

class productosController
{
    private $dt_productos;

    public function __construct()
    {
        $this->dt_productos = new dt_tbl_productos();
    }

    public static function guardarProducto()
    {
        try {
            $id_comunidad = $_REQUEST['id_comunidad'];
            $id_cat_producto = $_REQUEST['id_cat_producto'];
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];
            $cantidad = $_REQUEST['cantidad'];
            $preciov_segurido = $_REQUEST['preciov_sugerido'];

            $tp = new tbl_productos();
            $dtp = new dt_tbl_productos();

            $tp->setIdComunidad($id_comunidad);
            $tp->setIdCatProducto($id_cat_producto);
            $tp->setNombre($nombre);
            $tp->setDescripcion($descripcion);
            $tp->setCantidad($cantidad);
            $tp->setPreciovSugerido($preciov_segurido);

            $dtp->guardarProducto($tp);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function editarProducto()
    {
        try {
            $id = $_REQUEST['id_producto'];
            $id_comunidad = $_REQUEST['id_comunidad'];
            $id_cat_producto = $_REQUEST['id_cat_producto'];
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];
            $cantidad = $_REQUEST['cantidad'];
            $preciov_segurido = $_REQUEST['preciov_sugerido'];
            $estado = $_REQUEST['estado'];

            $tp = new tbl_productos();
            $dtp = new dt_tbl_productos();

            $tp->setIdProducto($id);
            $tp->setIdComunidad($id_comunidad);
            $tp->setIdCatProducto($id_cat_producto);
            $tp->setNombre($nombre);
            $tp->setDescripcion($descripcion);
            $tp->setCantidad($cantidad);
            $tp->setPreciovSugerido($preciov_segurido);
            $tp->setEstado($estado);

            $dtp->editarProducto($tp);

            header("Location: agregar_productos.php");


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function eliminarUsuario()
    {
        try {
            $id = $_REQUEST['id_producto'];

            $dtp = new dt_tbl_productos();

            $dtp->eliminarProducto($id);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}