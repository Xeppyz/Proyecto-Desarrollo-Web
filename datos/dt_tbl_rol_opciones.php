<<?php
require_once("conexion.php");
require_once("../entidades/rol_opciones.php");
require_once("../entidades/vw_rol_opcion.php");


class dt_tbl_rol_opciones extends Conexion
{
    private $myCon;

    public function listarRolOpciones($id_rol)
    {
        try
        {
            $sql = "SELECT id_opciones, opcion_descripcion FROM vw_rol_opcion where id_rol = ?;";

            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id_rol));

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $rol_opcion = new vw_rol_opcion();

                $rol_opcion->setIdOpciones($r->id_opciones);
                $rol_opcion->setOpcionDescripcion($r->rol_opcion);


                $result[] = $rol_opcion;
            }

            return $result;
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    public function asignarRolOpciones(rol_opciones $ro)
    {
        try
        {
            $sql = "INSERT INTO rol_opciones (tbl_rol_id_rol, tbl_opciones_id_opciones) VALUES 
                    (?,?)";
            $query = $this->conectar()->prepare($sql)->execute(array(
                $ro->getTblRolIdRol(),
                $ro->getTblOpcionesIdOpciones()));

        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }

    }

    public function mostrarRol($id_rol)
    {
        try
        {
            $sql = "SELECT * FROM tbl_rol where estado<>3 and id_rol=?;";
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id_rol));

            $r = $stm->fetch(PDO::FETCH_OBJ);
            $tr = new tbl_rol();

            $tr->setIdRol($r->id_rol);
            $tr->setRolDescripcion($r->rol_descripcion);

            return $tr;
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

}
?>