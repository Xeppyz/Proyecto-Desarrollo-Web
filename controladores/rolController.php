<?php
require_once('../entidades/tbl_rol.php');
require_once("../datos/dt_tbl_rol.php");

class rolController
{
    private $dt_rol;

    public function __construct(){
        $this->dt_rol = new dt_tbl_rol();
    }

    public static function guardarRol(){
        try
        {
            $rol_desc = $_REQUEST['rol_descripcion'];

            $tr = new tbl_rol();
            $dtr = new dt_tbl_rol();

            $tr->setRolDesc($rol_desc);

            $dtr->guardarRol($tr);
            header("Location: agregar_rol.php");

        } catch (Exception $e) {
            die($e->getMessage());

        }
    }

    public static function editarRol()
    {
        try
        {
            $id = $_REQUEST['id_rol'];
            $rol_desc = $_REQUEST['rol_descripcion'];

            $tr = new tbl_rol();
            $dtr = new dt_tbl_rol();

            $tr->setIdRol($id);
            $tr->setRolDesc($rol_desc);

            $dtr->editarRol($tr);

            header("Location: editar_rol.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public static function eliminarRol()
    {
        try
        {
            $id = $_REQUEST['id_rol'];

            $tr = new tbl_rol();
            $dtr = new dt_tbl_rol();

            $tr->setIdRol($id);

            $dtr->eliminarRol($tr);

            header("Location: eliminar_rol.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}
