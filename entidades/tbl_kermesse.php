<?php

class tbl_kermesse
{
    private $id_kermesse;
    private $idParroquia;
    private $nombre;
    private $finicio;
    private $Ffinal;
    private $descripcion;
    private $estado;
    private $usuario_creacion;
    private $fecha_creacion;
    private $usuario_modificacion;
    private $fecha_modificacion;
    private $usuario_eliminacion;
    private $fecha_eliminacion;

    public function GET($k)
    {
        return $this->$k;
    }

    public function SET($k, $v)
    {
        return $this->$k = $v;
    }
}