<?php

namespace App\Classes;

use App\Models\Tree as ModelsTree;

class Tree
{
    //Clase para calcular la cantidad de arboles en compensacion
    //para realizar esto se crean 2 metodos
    //1.- convertCo2
    //2.- calculateCompensation
    
    public $co2;
    public $result=[];

    //Metodo constructor que inicializa la conversion de toneladas a kg
    public function __construct(Float $footprint)
    {
        $this->co2 = $this->convertCo2($footprint);
    }

    //Metodo para realizar el calculo de la cantidad de arboles de compensacion
    //# de arboles = huella de carbono(kg)/ $capacidad de absorcion(kg)
    //Este resultado se redondea y se guarda en un arreglo para ser mostrado en pantalla 
    public function calculateCompensation($trees){
        foreach($trees as $tree){
            $result = $this->co2 / $tree->absorption_capacity;
            array_push($this->result, number_format($result));

        }
        return $this->result;
    }

    //Metodo que requiere la huella de carbono(toneladas) y realiza la conversion a kg mediante la formula kg = ton * 1000
    //(1ton = 1,000kg)
    public function convertCo2(Float $footprint)
    {
        return $footprint * 1000;
    }
}
