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

    public static function editarUsuario()
    {
        try
        {
            $id = $_REQUEST['id_usuario'];
            $nombre = $_REQUEST['nombre'];
            $apellidos = $_REQUEST['apellido'];
            $email = $_REQUEST['email'];
            $usuario = $_REQUEST['usuario'];
            $pwd = $_REQUEST['pwd'];

            $tu = new tbl_usuario();
            $dtu = new dt_tbl_usuario();

            $tu->setIdUsuario($id);
            $tu->setNombres($nombre);
            $tu->setApellidos($apellidos);
            $tu->setEmail($email);
            $tu->setUsuario($usuario);
            $tu->setPwd($pwd);

            $dtu->editarUsuario($tu);

            header("Location: agregar_usuario.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    public static function eliminarUsuario()
    {
        try
        {
            $id = $_REQUEST['id_usuario'];

            $dtu = new dt_tbl_usuario();

            $dtu->editarUsuario($id);

            header("Location: usuario.php");
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}