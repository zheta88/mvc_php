<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
         $this->view->render('nuevo/index'); 
   
    }

    function render(){
        // $this->view->render('nuevo/index');
    }

    function registrar(){
        $idrol = $_POST['ROL_idROL'];
        $cedula = $_POST['Cedula'];
        $nombre = $_POST['Nombre'];
        $apellidos = $_POST['Apellidos'];
        $celular = $_POST['Celular'];
        $direccion = $_POST['Direccion'];
        $correo = $_POST['Correo'];
        $contrasena = $_POST['Contrasena'];


        $mensaje = "";

        if($this->model->insert(['ROL_idROL'=>$idrol,'Cedula'=>$cedula,'Nombre'=>$nombre,'Apellidos'=>$apellidos,'Celular'=>$celular,'Direccion'=>$direccion,'Correo'=>$correo,'Contrasena'=>$contrasena])){
            $mensaje="Nuevo registro creado";
        }else{
            $mensaje="registro ya existe";
        }

        $this->view->mensaje=$mensaje;
        $this->render();
    }
}

?>