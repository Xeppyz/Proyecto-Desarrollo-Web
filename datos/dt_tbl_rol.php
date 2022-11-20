<?php

require_once("conexion.php");
require_once("../entidades/tbl_rol.php");

class dt_tbl_rol extends Conexion
{
    private $myCon;

    public function listarRoles()
    {
        try {
            $sql = "SELECT * FROM tbl_rol where estado<>3;";
            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $tr = new tbl_rol();

                $tr->setIdRol($r->id_rol);
                $tr->setRolDesc($r->rol_descripcion);
                $tr->setEstado($r->estado);

                $result[] = $tr;
            }

            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function mostrarRol($id_rol)
    {
        try {
            $sql = "SELECT * FROM tbl_rol where estado<>3 and id_rol = ?;";
            //$result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id_rol));

            $r = $stm->fetch(PDO::FETCH_OBJ);

            $tr = new tbl_rol();

            $tr->setIdRol($r->id_rol);
            $tr->setRolDesc($r->rol_descripcion);
            $tr->setEstado($r->estado);

            //$result[] = $tu;
            return $tr;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function guardarRol(tbl_rol $tr)
    {
        try {

            $sql = "INSERT INTO tbl_rol (rol_descripcion, estado) VALUES (?,1)";

            $query = $this->conectar()->prepare($sql)->execute(array(
                $tr->getRolDesc()
            ));
            var_dump($query);

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function editarRol(tbl_rol $tr)
    {
        try {
            $sql = 'UPDATE tbl_usuario SET rol_descripcion = ? where id_rol = ?';
            $query = $this->conectar()->prepare($sql);
            $query->execute(array(
                $tr->getRolDesc(),
                $tr->getIdUsuario()
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminarRol(tbl_rol $tr)
    {
        try {
            $sql = 'UPDATE tbl_rol SET estado = 3 where id_rol = ?';
            $query = $this->conectar()->prepare($sql);
            $query->execute(array(
                $tr->getIdRol()
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>