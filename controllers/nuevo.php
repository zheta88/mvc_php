<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
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

        $this->model->insert(['ROL_idROL'=>$idrol,'Cedula'=>$cedula,'Nombre'=>$nombre,'Apellidos'=>$apellidos,'Celular'=>$celular,'Direccion'=>$direccion,'Correo'=>$correo,'Contrasena'=>$contrasena]);
        

        $this->view->mensaje=$mensaje;
        $this->render();
    }

    function list(){
        $this->view->datos = $this->model->list(null);
        $this->view->render("nuevo/list");
    }

    function actualizar($datos){
        $this->view->mensaje = "";
        if(isset($_POST['cedula'])) {
            $datosActualizados = array(
                'cedula' => $_POST['cedula'],
                'Nombre' => $_POST['Nombre'],
            );
            $this->model->update($datosActualizados);
            $this->view->mensaje = "Se actualizó con exito!";
        }
        $cedula = $datos[0];
        $datosPersona = $this->model->searchByCedula($cedula);
        $this->view->datos = $datosPersona;
        
        $this->view->render('nuevo/index');
    }
    
    


}

?>