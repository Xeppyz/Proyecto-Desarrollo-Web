<?php
require_once("conexion.php");
require_once("../entidades/tbl_comunidad.php");
class comunidadController
{
    private $dt_comunidad;

    public function __construct(){
        $this->dt_comunidad = new dt_tbl_comunidad();
    }
    public static function guardarComunidad(){
        try
        {
            $nombre = $_REQUEST['nombre'];
            $responsable = $_REQUEST['responsable'];
            $desc_contribucion = $_REQUEST['desc_contribucion'];
            $estado = $_REQUEST['estado'];
            $data = "'".$nombre."'".$responsable."'".$desc_contribucion."'".$estado."'";

            $tc = new tbl_comunidad();
            $dtc = new dt_tbl_comunidad();


            $tc->setNombre($nombre);
            $tc->setResponsable($responsable);
            $tc->setDescContribucion($desc_contribucion);
            $tc->setEstado($estado);

            $dtc->guardarComunidad($tc);

            header("Location: agregar_comunidad.php");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function editarComunidad()
    {
        try
        {
            $id = $_REQUEST['id_comunidad'];
            $nombre = $_REQUEST['nombre'];
            $responsable = $_REQUEST['apellido'];
            $desc_contribucion = $_REQUEST['email'];
            $estado = $_REQUEST['usuario'];

            $tc = new tbl_comunidad();
            $dtc = new dt_tbl_comunidad();

            $tc->setIdComunidad($id);
            $tc->setNombre($nombre);
            $tc->setResponsable($responsable);
            $tc->setDescContribucion($desc_contribucion);
            $tc->setEstado($estado);

            $dtc->editarComunidad($tc);

            header("Location: agregar_comunidad.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public static function eliminarComunidad()
    {
        try
        {
            $id = $_REQUEST['id_comunidad'];

            $dtc = new dt_tbl_comunidad();

            $dtc->editarComunidad($id);

            header("Location: comunidad.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}