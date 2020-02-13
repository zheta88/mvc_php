<?php

class NuevoModel extends  Model {

    public  function __construct(){

        parent::__construct();
    }

    //método para insertar datos en mi bd
    public function insert($datos){
        $query=$this->db->connect()->prepare('INSERT INTO PERSONAS(ROL_IDROL,CEDULA, NOMBRE, APELLIDOS,CELULAR,DIRECCION,CORREO,CONTRASENA)VALUES (:ROL_idROL,:Cedula, :Nombre, :Apellidos,:Celular,:Direccion,:Correo,:Contrasena)');
        $query->execute(['ROL_idROL'=>$datos['ROL_idROL'],'Cedula'=> $datos['Cedula'],'Nombre'=> $datos['Nombre'],'Apellidos'=>$datos['Apellidos'],'Celular'=>$datos['Celular'],'Direccion'=>$datos['Direccion'],'Correo'=>$datos['Correo'],'Contrasena'=>sha1($datos['Contrasena'])]);

            echo "insertar datos";
    }

}

?>