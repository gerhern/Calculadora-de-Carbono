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
    public $qty=[];
    public $cost=[];

    //Metodo constructor que inicializa la conversion de toneladas a kg
    public function __construct(Float $footprint){
        $this->co2 = $this->convertCo2($footprint);
    }

    //Metodo para realizar el calculo de la cantidad de arboles de compensacion
    //# de arboles = huella de carbono(kg)/ $capacidad de absorcion(kg)
    //Este resultado se redondea y se guarda en un arreglo para ser mostrado en pantalla 
    public function calculateCompensation($trees){
        foreach($trees as $tree){
            $result = $this->co2 / $tree->absorption_capacity;
            array_push($this->qty, $result);

        }
        return $this->qty;
    }
    //Metodo que calcula los costos de un determinado numero de arboles retorna un array con los costos
    public function calculateCost($trees, $qty){
        
        $i = 0;
        foreach($trees as $tree){
            if($tree != null){
                $result = $tree->cost * (int)$qty[$i];
                array_push($this->cost, $result);
            }else{
                array_push($this->cost, null);
            }
            $i++;
        }
        return $this->cost;
    }

    //Metodo que requiere la huella de carbono(toneladas) y realiza la conversion a kg mediante la formula kg = ton * 1000
    //(1ton = 1,000kg)
    public function convertCo2(Float $footprint){
        return $footprint * 1000;
    }


    // Metodo que regresa un array con formato numerico (number_format para muchos datos en un array)
    public function getFormat($numbers, $decimals){

        $result = [];
        
        foreach($numbers as $number){
            if($number != null){
                array_push($result, number_format($number, $decimals));
            }else{
                array_push($result, null);
            }
        }
        return $result;
    }
}
