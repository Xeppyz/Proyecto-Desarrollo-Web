<?php
require_once ('../entidades/tbl_productos.php');
require_once ('../datos/dt_tbl_productos.php');

class productosController
{
    private $dt_productos;

    public function __construct()
    {
        $this->dt_productos = new dt_tbl_productos();
    }

    public static function guardarProducto(){
        try {
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];
            $cantidad = $_REQUEST['cantidad'];
            $precio_segurido = $_REQUEST['preciov_sugerido'];
            $estado = $_REQUEST['estado'];
            $data = "'".$nombre."'".$descripcion."'".$cantidad."'".$precio_segurido."'".$estado;

            $tp = new tbl_productos();
            $dtp = new dt_tbl_productos();

            $tp->setNombres($nombre);
            $tp->setApellidos($descripcion);
            $tp->setEmail($cantidad);
            $tp->setUsuario($precio_segurido);
            $tp->setPwd($estado);

            $dtp->guardarProducto($tp);

        } catch (Exception $e){
            die($e->getMessage());
        }
    }

/*    $insertar = "INSERT INTO tbl_productos VALUES ('')";*/
}