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
     public function list($datos){
        $listaResultados = array();
        $query=$this->db->connect()->prepare('SELECT * FROM PERSONAS');
        $query->execute();
        while($fila = $query->fetch(PDO::FETCH_ASSOC)){
            array_push($listaResultados,$fila);
        }
        return $listaResultados;
     }

     public function searchByCedula($cedula){
        $listaResultados = array();
        $query=$this->db->connect()->prepare('SELECT * FROM PERSONAS WHERE CEDULA=:cedula');
        $query->execute(['cedula'=>$cedula]);
        $fila = $query->fetch(PDO::FETCH_ASSOC);
        return $fila;
     }

    public function search($datos){
        //$query=$this->db->connect()->prepare('SELECT FROM');


    }

    public function update($datos){
        $query=$this->db->connect()->prepare('UPDATE PERSONAS SET ROL_IDROL=:ROL_idROL,CEDULA=:Cedula, NOMBRE=:Nombre, APELLIDOS=:Apelldos,CELULAR=:Celular,DIRECCION=:Direccion,CORREO=:Correo,CONTRASENA=:Contrasena WHERE Cedula=:Cedula');
        $query->execute(['ROL_idROL'=>$datos['ROL_idROL'],'Cedula'=> $datos['Cedula'],'Nombre'=> $datos['Nombre'],'Apellidos'=>$datos['Apellidos'],'Celular'=>$datos['Celular'],'Direccion'=>$datos['Direccion'],'Correo'=>$datos['Correo'],'Contrasena'=>sha1($datos['Contrasena'])]);

        echo "Actualizar datos";
    }

}

?>