<?php

class Pension{
    public $diaa;
    public $mesa;
    public $anoa;
    public $dianacimiento;
    public $mesnacimiento;
    public $anonacimiento;
    public $anos;
    public $meses;
    public $dias;
    public $genero1;
    public $genero2;
    public $genero;
    public $fecha_inicio;
    public $fecha_final;
    public $semanas_cotizadas;
    private $respuesta = "";
  
    public function Pension($dian,$mesn,$anon,$genero,$fechaInicio,$fechaFinal){
        $this->diaa=date("d");
        $this->mesa=date("n");
        $this->anoa=date("Y");
        $this->dianacimiento=$dian;
        $this->mesnacimiento=$mesn;
        $this->anonacimiento=$anon;
        $this->genero=$genero;
        $this->genero1="mujer";
        $this->genero2="hombre";
        $this->fecha_inicio=$fechaInicio;
        $this->fecha_final=$fechaFinal;
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

    private function Genero_Edad(){

        if (($this->anos<57) && ($this->genero==$this->genero1)) {
    
            $this->respuesta .= "Aun no tienes edad para pensionarte<br>";
        }
        if (($this->anos<62) && ($this->genero==$this->genero2)) {
        
            $this->respuesta .= "Aun no tienes edad para pensionarte<br>";
        }
    
    }
    private function Semanas_cotizacion(){

        if ($this->semanas_cotizadas>=1300) {
            
            $this->respuesta .= "cumple con las semanas para cotizacion<br>";
        }
        else{
            $this->respuesta .= " aún no cumple con las semanas de cotizacion para pensión<br>";
        }

        
    }

    function obtenerSemanasCotizadas( ){
        $fechaFin=date_create($this->fecha_final);
        $fechaIni=date_create($this->fecha_inicio);
        $diff=date_diff($fechaIni,$fechaFin);
        
        $this->semanas_cotizadas = round(intval($diff->format("%R%a")) / 7);
    }

    function hacerCalculo(){
        $this->CalcularAnos();
        $this->Genero_Edad();
        $this->obtenerSemanasCotizadas();
        $this->Semanas_cotizacion();
    }
        
        
 function imprimir(){
    return "Edad : ". $this->anos ." años Género " . $this->genero . ". ".$this->semanas_cotizadas ." Semanas Cotizadas<br>" . $this->respuesta;
 }

}
//---------------------------------------------------------//
class Edad_pension extends Controller{

    function __construct(){
        parent::__construct();
        $parametros=array();
        if(filter_input(INPUT_POST, 'dia') !== null){
            $dia = filter_input(INPUT_POST, 'dia');
            $mes = filter_input(INPUT_POST, 'mes');
            $año = filter_input(INPUT_POST, 'año');
            $genero = filter_input(INPUT_POST, 'Genero');
            $fecha_inicio= filter_input(INPUT_POST, 'fecha_inicio');
            $fecha_final = filter_input(INPUT_POST, 'fecha_final');
            $pension = new Pension($dia,$mes,$año,$genero,$fecha_inicio,$fecha_final);
            $pension->hacerCalculo();
            $parametros['edad_pension'] = $pension->imprimir();
        }
        $this->view->render('edad_pension/index',$parametros);
        // echo "<p>nuevo controlador main</p>";
    }
 
}
?>