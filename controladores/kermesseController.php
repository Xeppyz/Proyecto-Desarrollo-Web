<?php

class kermesseController
{
    private $dt_kermesse;

    public function __construct(){
        $this->dt_kermesse = new dt_tbl_kermesse();
    }
    public static function guardarKermesse(){
        try
        {
            $idParroquia = $_REQUEST['idParroquia'];
            $nombre = $_REQUEST['nombre'];
            $fInicio = $_REQUEST['fInicio'];
            $fFinal = $_REQUEST['fFinal'];
            $descripcion = $_REQUEST['descripcion'];

            $tk = new tbl_kermesse();
            $dtk = new dt_tbl_kermesse();

            $tk->setIdParroquia($idParroquia);
            $tk->setNombre($nombre);
            $tk->setfInicio($fInicio);
            $tk->setfFinal($fFinal);
            $tk->setDescripcion($descripcion);

            //$this->usuario->guardarUsuario($tu);
            $dtk->guardarKermesse($tk);


            header("Location: agregar_kermesse.php");

        }
        catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public static function editarUsuario()
    {
        try
        {
            $id = $_REQUEST['id_kermesse'];
            $idParroquia = $_REQUEST['id_parroquia'];
            $nombre = $_REQUEST['nombre'];
            $fInicio = $_REQUEST['fInicio'];
            $fFinal = $_REQUEST['fFinal'];
            $descripcion = $_REQUEST['descripcion'];

            $tk = new tbl_kermesse();
            $dtk = new dt_tbl_kermesse();

            $tk->setIdKermesse($id);
            $tk->setIdParroquia($idParroquia);
            $tk->setNombre($nombre);
            $tk->setfInicio($fInicio);
            $tk->setfFinal($fFinal);
            $tk->setDescripcion($descripcion);

            $dtk->editarKermesse($tk);

            header("Location: agregar_kermesse.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    public static function eliminarUsuario()
    {
        try
        {
            $id = $_REQUEST['id_kermesse'];

            $dtk = new dt_tbl_kermesse();

            $dtk->eliminarKermesse($id);

            header("Location: kermesse.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}