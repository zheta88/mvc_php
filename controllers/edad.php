<?php
class Cumpleanos{
    public $diaa;
    public $mesa;
    public $anoa;
    public $dianacimiento;
    public $mesnacimiento;
    public $anonacimiento;
    public $anos;
    public $meses;
    public $dias;

    public function Cumpleanos($dian,$mesn,$anon){
    $this->diaa=date("d");
    $this->mesa=date("n");
    $this->anoa=date("Y");
    $this->dianacimiento=$dian;
    $this->mesnacimiento=$mesn;
    $this->anonacimiento=$anon;
    }

    private function CalcularAnos(){
    if ((($this->mesnacimiento == $this->mesa) && ($this->dianacimiento > $this->diaa))
        || ($this->mesnacimiento>$this->mesa) ) {
        $this->anos=($this->anoa-$this->anonacimiento-1);
    }
    else{
        $this->anos=$this->anoa-$this->anonacimiento;      
    }

}
private function Calcularmeses(){
if ($this->mesa<$this->mesnacimiento){

    $this->meses=(($this->mesa+12)-$this->mesnacimiento);
}
else {
    $this->meses=($this->mesa-$this->mesnacimiento);
}
}
private function Calculardias(){

    if ($this->diaa<$this->dianacimiento){
        $this->dias=(($this->diaa+30)-$this->dianacimiento);
    }
    
    else{
        $this->dias=($this->diaa-$this->dianacimiento);
    }
}

public function hacerCalculo(){
    $this->CalcularAnos();
    $this->Calcularmeses();
    $this->Calculardias();
}

public function imprimir(){
    return "Tu edad al día de hoy es : ". $this->anos ." años".  $this->meses ."meses".$this->dias ."dias";
 }


}


class Edad extends Controller{

    function __construct(){
        parent::__construct();
        $parametros=array();
        if(filter_input(INPUT_POST, 'dia') !== null){
            $dia = filter_input(INPUT_POST, 'dia');
            $mes = filter_input(INPUT_POST, 'mes');
            $año = filter_input(INPUT_POST, 'año');
            $cumple = new Cumpleanos($dia,$mes,$año);
            $cumple->hacerCalculo();
            $parametros['resultado_edad'] = $cumple->imprimir();
        }
        $this->view->render('edad/index',$parametros);
        // echo "<p>nuevo controlador main</p>";
    }
}

?>