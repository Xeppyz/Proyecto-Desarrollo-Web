<?php

class tbl_productos
{
    private $id_producto;
    private $id_comunidad;
    private $id_cat_producto;
    private $nombre;
    private $descripcion;
    private $cantidad;
    private $preciov_sugerido;
    private $estado;

    /**
     * @return mixed
     */
    public function getIdProducto()
    {
        return $this->id_producto;
    }

    /**
     * @param mixed $id_producto
     */
    public function setIdProducto($id_producto): void
    {
        $this->id_producto = $id_producto;
    }

    /**
     * @return mixed
     */
    public function getIdComunidad()
    {
        return $this->id_comunidad;
    }

    /**
     * @param mixed $id_comunidad
     */
    public function setIdComunidad($id_comunidad): void
    {
        $this->id_comunidad = $id_comunidad;
    }

    /**
     * @return mixed
     */
    public function getIdCatProducto()
    {
        return $this->id_cat_producto;
    }

    /**
     * @param mixed $id_cat_producto
     */
    public function setIdCatProducto($id_cat_producto): void
    {
        $this->id_cat_producto = $id_cat_producto;
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
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad($cantidad): void
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return mixed
     */
    public function getPreciovSugerido()
    {
        return $this->preciov_sugerido;
    }

    /**
     * @param mixed $preciov_sugerido
     */
    public function setPreciovSugerido($preciov_sugerido): void
    {
        $this->preciov_sugerido = $preciov_sugerido;
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
