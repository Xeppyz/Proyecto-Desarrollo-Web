<?php

class categoria_productoController
{
    private $dt_categoria_producto;

    public function __construct(){
        $this->dt_categoria_producto = new dt_tbl_categoria_producto();
    }
    public static function guardarCategoriaProducto(){
        try
        {
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];

            $tcp = new tbl_categoria_producto();
            $dtcp = new dt_tbl_categoria_producto();


            $tcp->setNombre($nombre);
            $tcp->setDescripcion($descripcion);

            $dtcp->guardarCategoriaProducto($tcp);

            header("Location: agregar_categoria_producto.php");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function editarCategoriaProducto()
    {
        try
        {
            $id = $_REQUEST['id_categoria_producto'];
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];

            $tcp = new tbl_categoria_producto();
            $dtcp = new dt_tbl_categoria_producto();

            $tcp->setIdCategoriaProducto($id);
            $tcp->setNombre($nombre);
            $tcp->setDescripcion($descripcion);

            $dtcp->editarCategoriaProducto($tcp);

            header("Location: agregar_categoria_producto.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public static function eliminarCategoriaProducto()
    {
        try
        {
            $id = $_REQUEST['id_categoria_producto'];

            $dtcp = new dt_tbl_categoria_producto();

            $dtcp->editarCategoriaProducto($id);

            header("Location: categoria_producto.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}