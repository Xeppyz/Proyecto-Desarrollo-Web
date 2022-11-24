<?php
require_once("../entidades/tbl_opciones.php");
require_once("../datos/dt_tbl_opciones.php");
class opcionesController
{
    private $dt_opciones;

    public function __construct(){
        $this->dt_opciones = new dt_tbl_opciones();
    }
    public static function guardarOpciones(){
        try
        {
            $opcion_descripcion = $_REQUEST['opcion_descripcion'];

            $to = new tbl_opciones();
            $dto = new dt_tbl_opciones();

            $to->setOpcionDescripcion($opcion_descripcion);

            $dto->guardarOpciones($to);

            header("Location: agregar_opciones.php");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function editarOpciones()
    {
        try
        {
            $id = $_REQUEST['id_opciones'];
            $opcion_descripcion = $_REQUEST['opcion_descripcion'];

            $to = new tbl_opciones();
            $dto = new dt_tbl_opciones();

            $to->setIdOpciones($id);
            $to->setOpcionDescripcion($opcion_descripcion);

            $dto->editarOpciones($to);

            header("Location: agregar_opciones.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public static function eliminarOpciones()
    {
        try
        {
            $id = $_REQUEST['id_opciones'];

            $dto = new dt_tbl_opciones();

            $dto->editarOpciones($id);

            header("Location: opciones.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}