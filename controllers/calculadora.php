<?php
class Suma{
    public $valor1=0;
    public $valor2=0;
    public $r=0;
    
        public function Suma($a,$b){
            $this->valor1=$a;
            $this->valor2=$b;
        }
        public function sumar(){
    
            $this->r=$this->valor1+ $this->valor2;
        }
    
        public function imprimir(){
           return "El resultado es : " .$this->r;
        }
    
}

class Calculadora extends Controller{

    function Calculadora(){
        parent::__construct();
        $parametros = array();
        if(filter_input(INPUT_POST,'num1') !== null){
            $num1 = filter_input(INPUT_POST,'num1');
            $num2 = filter_input(INPUT_POST,'num2');
            $suma = new Suma( $num1, $num2);
            $suma->sumar();
            $parametros['resultado_suma'] = $suma->imprimir();
        }
        $this->view->render('calculadora/index',$parametros);
       
    }
}


?>