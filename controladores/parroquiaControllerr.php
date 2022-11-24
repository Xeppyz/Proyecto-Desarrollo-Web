<?php
require_once('../entidades/tbl_parroquia.php');
require_once("../datos/dt_tbl_parroquia.php");

class parroquiaControllerr{
    private $dt_parroquia;

    public function __construct(){
        $this->dt_parroquia= new dt_tbl_parroquia();
    }
    public static function guardarUsuario(){
        try
        {

            $nombre = $_REQUEST['nombre'];
            $direccion = $_REQUEST['direccion'];
            $telefono = $_REQUEST['telefono'];
            $parraco = $_REQUEST['parraco'];
            $logo = $_REQUEST['logo'];
            $sitioweb = $_REQUEST['sitioweb'];

            $data = "'".$nombre."'".$direccion."'".$telefono."'".$parraco."'".$logo."'".$sitioweb;

            $tp = new tbl_parroquia();
            $dtp = new dt_tbl_parroquia();

            $tp->setNombres($nombre);
            $tp->setDireccion($direccion);
            $tp->setTelefono($telefono);
            $tp->setParroco($parraco);
            $tp->setLogo($logo);
            $tp->setSitioWeb($sitioweb);


            //$this->usuario->guardarUsuario($tu);
            $dtp->guardarParroquia($tp);


            header("Location: agregar_parroquia.php");

        }
        catch (Exception $e) {
            die($e->getMessage());
        }

    }


}