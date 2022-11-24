<?php

class tbl_comunidad
{
    private $id_comunidad;
    private $nombre;
    private $responsable;
    private $desc_contribucion;
    private $estado;

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
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * @param mixed $responsable
     */
    public function setResponsable($responsable): void
    {
        $this->responsable = $responsable;
    }

    /**
     * @return mixed
     */
    public function getDescContribucion()
    {
        return $this->desc_contribucion;
    }

    /**
     * @param mixed $desc_contribucion
     */
    public function setDescContribucion($desc_contribucion): void
    {
        $this->desc_contribucion = $desc_contribucion;
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



    public function __GET($k) {return $this->$k;}
    public function __SET($k, $v) {return $this->$k = $v;}
}