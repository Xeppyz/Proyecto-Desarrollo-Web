<?php

class tbl_kermesse
{
    private $id_kermesse;
    private $idParroquia;
    private $nombre;
    private $fInicio;
    private $fFinal;
    private $descripcion;
    private $estado;
    private $usuario_creacion;
    private $fecha_creacion;
    private $usuario_modificacion;
    private $fecha_modificacion;
    private $usuario_eliminacion;
    private $fecha_eliminacion;

    /**
     * @return mixed
     */
    public function getIdKermesse()
    {
        return $this->id_kermesse;
    }

    /**
     * @param mixed $id_kermesse
     */
    public function setIdKermesse($id_kermesse): void
    {
        $this->id_kermesse = $id_kermesse;
    }

    /**
     * @return mixed
     */
    public function getIdParroquia()
    {
        return $this->idParroquia;
    }

    /**
     * @param mixed $idParroquia
     */
    public function setIdParroquia($idParroquia): void
    {
        $this->idParroquia = $idParroquia;
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
    public function getfInicio()
    {
        return $this->fInicio;
    }

    /**
     * @param mixed $fInicio
     */
    public function setfInicio($fInicio): void
    {
        $this->fInicio = $fInicio;
    }

    /**
     * @return mixed
     */
    public function getfFinal()
    {
        return $this->fFinal;
    }

    /**
     * @param mixed $fFinal
     */
    public function setfFinal($fFinal): void
    {
        $this->fFinal = $fFinal;
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

    /**
     * @return mixed
     */
    public function getUsuarioCreacion()
    {
        return $this->usuario_creacion;
    }

    /**
     * @param mixed $usuario_creacion
     */
    public function setUsuarioCreacion($usuario_creacion): void
    {
        $this->usuario_creacion = $usuario_creacion;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * @param mixed $fecha_creacion
     */
    public function setFechaCreacion($fecha_creacion): void
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    /**
     * @return mixed
     */
    public function getUsuarioModificacion()
    {
        return $this->usuario_modificacion;
    }

    /**
     * @param mixed $usuario_modificacion
     */
    public function setUsuarioModificacion($usuario_modificacion): void
    {
        $this->usuario_modificacion = $usuario_modificacion;
    }

    /**
     * @return mixed
     */
    public function getFechaModificacion()
    {
        return $this->fecha_modificacion;
    }

    /**
     * @param mixed $fecha_modificacion
     */
    public function setFechaModificacion($fecha_modificacion): void
    {
        $this->fecha_modificacion = $fecha_modificacion;
    }

    /**
     * @return mixed
     */
    public function getUsuarioEliminacion()
    {
        return $this->usuario_eliminacion;
    }

    /**
     * @param mixed $usuario_eliminacion
     */
    public function setUsuarioEliminacion($usuario_eliminacion): void
    {
        $this->usuario_eliminacion = $usuario_eliminacion;
    }

    /**
     * @return mixed
     */
    public function getFechaEliminacion()
    {
        return $this->fecha_eliminacion;
    }

    /**
     * @param mixed $fecha_eliminacion
     */
    public function setFechaEliminacion($fecha_eliminacion): void
    {
        $this->fecha_eliminacion = $fecha_eliminacion;
    }

}