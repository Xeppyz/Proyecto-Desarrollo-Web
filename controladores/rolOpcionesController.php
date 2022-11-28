<?php
require_once('../entidades/rol_opciones.php');
require_once("../datos/dt_tbl_rol_opciones.php");

class rolOpcionesController{
    private $dt_usuario;

    public function __construct(){
        $this->dt_rol = new dt_tbl_rol();
    }
    public static function asignarRolOpcion(){
        try
        {
            $id_rol = $_REQUEST['id_rol'];
            $id_opciones = $_REQUEST['id_opciones'];

            print($id_rol);
            print($id_opciones);

            $ro = new rol_opciones();
            $dtro = new dt_tbl_rol_opciones();

            $ro->setTblRolIdRol($id_rol);
            $ro->setTblOpcionesIdOpciones($id_opciones);

            //$this->usuario->guardarUsuario($tu);
            $dtro->asignarRolOpciones($ro);


            //header("Location: agregar_rol_usuario.php");

        }
        catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public static function editarRol()
    {
        try
        {
            $id = $_REQUEST['id_rol'];
            $descripcion = $_REQUEST['rol_descripcion'];

            $tr = new tbl_rol();
            $dtr = new dt_tbl_rol();

            $tr->setIdRol($id);
            $tr->setRolDescripcion($descripcion);

            $dtr->editarRol($tr);

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

            $dtr = new dt_tbl_rol();

            $dtr->editarRol($id);

            header("Location: usuario.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}