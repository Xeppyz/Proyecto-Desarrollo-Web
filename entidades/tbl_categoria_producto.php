<?php

class tbl_categoria_producto
{
    private $id_categoria_producto;
    private $nombre;
    private $descripcion;
    private $estado;

    /**
     * @return mixed
     */
    public function getIdCategoriaProducto()
    {
        return $this->id_categoria_producto;
    }

    /**
     * @param mixed $id_categoria_producto
     */
    public function setIdCategoriaProducto($id_categoria_producto): void
    {
        $this->id_categoria_producto = $id_categoria_producto;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }


}