<?php

namespace App\Classes;

class Tree{
    //Clase para calcular la cantidad de arboles en compensacion
    //para realizar esto se crean 2 metodos
    //1.- convertCo2
    //2.- calculateCompensation

    //Se hace uso de la capacidad de absorcion de co2 de diferentes tipos de arboles, en esta caso como ejemplo se usaron 5 tipos, pero estos pueden ser "n" cantidad de arboles la capacidad de absorcion esta definida en Kg
    public $type = [
        'Manglares' => 38.706,
        'Cañamos' => 11.387,
        'Eucaliptos' => 162.25,
        'Palmeras' => 221.03,
        'Robles' => 229.28
    ];

    public $co2;
    public $trees;

    //Metodo constructor que inicializa la conversion de toneladas a kg
    public function __construct(Float $footprint){
        $this->co2 = $this->convertCo2($footprint);
    }

    //Metodo para realizar el calculo de la cantidad de arboles de compensacion
    //# de arboles = huella de carbono(kg)/ $capacidad de absorcion(kg)
    //Este resultado se redondea y se guarda en un arreglo para ser mostrado en pantalla 
    public function calculateCompensation(){

        foreach ($this->type as $name => $absortion) {
            
            $result = $this->co2 / $absortion;
            $this->trees[$name] = round($result);
        }

        return $this->trees;
    }

    //Metodo que requiere la huella de carbono(toneladas) y realiza la conversion a kg mediante la formula kg = ton * 1000
    //(1ton = 1,000kg)
    public function convertCo2(Float $footprint){

        return $footprint * 1000;
    }
    
}