<?php
require_once("conexion.php");
require_once("../entidades/tbl_categoria_producto.php");

class dt_tbl_categoria_producto extends Conexion
{
    private $myCon;

    public function listarCategoriaProducto(){
        try
        {
            $sql = "SELECT * FROM tbl_categoria_producto where estado<>3;";
            $result = array();
            $stm = $this->conectar()->prepare($sql);
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $tcp = new tbl_categoria_producto();

                $tcp->setIdCategoriaProducto($r->id_categoria_producto);
                $tcp->setNombre($r->nombre);
                $tcp->setDescripcion($r->descripcion);
                $tcp->setEstado($r->estado);

                $result[] = $tcp;
            }
            return $result;
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function guardarCategoriaProducto(tbl_categoria_producto $tcp)
    {
        try
        {
            $sql = "INSERT INTO tbl_categoria_producto (nombre, descripcion, estado) VALUES (?,?,1)";
            $query = $this->conectar()->prepare($sql)->execute(array(
                $tcp->getNombre(),
                $tcp->getDescripcion(),
            ));
            var_dump($query);
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function mostrarCategoria($id)
    {
        try
        {
            $sql = "SELECT * FROM tbl_categoria_producto where estado<>3 and id_categoria_producto=?;";
            $stm = $this->conectar()->prepare($sql);
            $stm->execute(array($id));

            $r = $stm->fetch(PDO::FETCH_OBJ);
            $tcp = new tbl_categoria_producto();

            $tcp->setIdCategoriaProducto($r->id_categoria_producto);
            $tcp->setNombre($r->nombre);
            $tcp->setDescripcion($r->descripcion);
            $tcp->setEstado($r->estado);


            return $tcp;
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function editarCategoriaProducto(tbl_categoria_producto $tcp)
    {
        try
        {
            $sql = "UPDATE tbl_categoria_producto SET nombre = ?, descripcion = ?, estado = 2 where id_categoria_producto = ?";
            $query = $this->conectar()->prepare($sql);

            $query->execute(array(
                $tcp->getNombre(),
                $tcp->getDescripcion(),
                $tcp->getIdCategoriaProducto()
            ));

        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function eliminarCategoriaProducto($id_categoria_producto)
    {
        try
        {
            $sql = "UPDATE tbl_categoria_producto SET estado = 3 where id_categoria_producto = ?";
            $query = $this->conectar()->prepare($sql);

            $query->execute(array(
                $id_categoria_producto
            ));

        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}