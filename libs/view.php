<?php

class View{
    public $datos = null;
    function __construct(){

        // echo "<p>vista base</p>";

        
    }

    function render ($nombre){
        $datos = $this->datos;
        require 'views/' . $nombre . '.php';
    }
}


?>