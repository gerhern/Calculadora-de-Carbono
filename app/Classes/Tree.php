<?php

namespace App\Classes;

class Tree{
    //Clase para calcular la cantidad de arboles en compensacion
    //para realizar esto se crean 2 metodos
    //1.- convertCo2
    //2.- calculateCompensation

    //Se hace uso de la capacidad de absorcion de co2 de diferentes tipos de arboles, en esta caso como ejemplo se usaron 5 tipos, pero estos pueden ser "n" cantidad de arboles la capacidad de absorcion esta definida en Kg
    public $treeType = [
        'Manglar'  => 38.706,
        'Eucalipto' => 162.25,
        'Palmera'   => 221.03,
        'Roble'     => 229.28,
        'Mandarino'  => 31.101,
        'Naranjo'    => 49.345,
        'Limonero'   => 106.933
    ];

    public $cultureType = [
        'Cañamo'    => 11.387,
        'Trigo'     => 0.011,
        'Cebada'    => 0.013,
        'Avena'     => 0.010,
        'Lechuga'   => 0.129,
        'Melon'     => 0.802,
        'Tomate'    => 1.590
    ];

    public $co2;
    public $trees;
    public $cultures;

    //Metodo constructor que inicializa la conversion de toneladas a kg
    public function __construct(Float $footprint){
        $this->co2 = $this->convertCo2($footprint);
    }

    //Metodo para realizar el calculo de la cantidad de arboles de compensacion
    //# de arboles = huella de carbono(kg)/ $capacidad de absorcion(kg)
    //Este resultado se redondea y se guarda en un arreglo para ser mostrado en pantalla 
    public function calculateCompensation(){

        foreach ($this->treeType as $name => $absortion) {
            
            $result = $this->co2 / $absortion;
            $this->trees[$name] = number_format($result);
        }

        foreach ($this->cultureType as $name => $absortion) {
            
            $result = $this->co2 / $absortion;
            $this->cultures[$name] = number_format($result);
        }

        return [
            'trees' => $this->trees,
            'cultures' => $this->cultures
        ];
    }

    //Metodo que requiere la huella de carbono(toneladas) y realiza la conversion a kg mediante la formula kg = ton * 1000
    //(1ton = 1,000kg)
    public function convertCo2(Float $footprint){

        return $footprint * 1000;
    }
    
}