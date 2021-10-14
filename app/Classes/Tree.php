<?php

namespace App\Classes;

class Tree
{
    //Clase para calcular la cantidad de arboles en compensacion
    //para realizar esto se crean 2 metodos
    //1.- convertCo2
    //2.- calculateCompensation
    
    public $co2;

    //Se hace uso de la capacidad de absorcion de co2 de diferentes tipos de arboles, en esta caso como ejemplo se usaron 5 tipos, pero estos pueden ser "n" cantidad de arboles la capacidad de absorcion esta definida en Kg
    public $treeData = [
        [
            17,
            'Mezquite',
            'Prosopis',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Velvet_mesquite.jpg/1024px-Velvet_mesquite.jpg',
            'De Sue in az - Trabajo propio, CC BY-SA 3.0'
        ],
        [
            30.564,
            'Fresno',
            'Fraxinus uhdei',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Starr_030405-0078_Fraxinus_uhdei.jpg/800px-Starr_030405-0078_Fraxinus_uhdei.jpg',
            'De Forest & Kim Starr, CC BY 3.0'
        ],
        [
            31.101,
            'Mandarino',
            'Citrus Reticulata',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Limonaia_del_Castel_-_DSC02147.JPG/800px-Limonaia_del_Castel_-_DSC02147.JPG',
            'De Daderot - Fotografía propia, Dominio público.'
        ],
        [
            38.706,
            'Manglar blanco',
            'Laguncularia Racemosa',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Mangrove_in_la_manzanilla.jpg/1280px-Mangrove_in_la_manzanilla.jpg',
            'De Tomas Castelazo - Trabajo propio, CC BY-SA 3.0'
        ],
        [
            49.345,
            'Naranjo',
            'Citrus × Sinensis',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Laranxeira_Naranjo_GFDL.JPG/1280px-Laranxeira_Naranjo_GFDL.JPG',
            'De Luis Miguel Bugallo Sánchez (Lmbuga Commons)(Lmbuga Galipedia)Publicada por/Publish by: Luis Miguel Bugallo Sánchez - Trabajo propio, CC BY-SA 3.0'
        ],
        [
            106.933,
            'Limonero',
            'Citrus × Limon',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Citrus_limonum_3.JPG/1280px-Citrus_limonum_3.JPG',
            'De Vicenç Salvador Torres Guerola - Trabajo propio, CC BY-SA 3.0'
        ],
        [
            162.257,
            'Eucalipto blanco',
            'Eucalyptus Globulus',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Starr_031214-0076_Eucalyptus_globulus.jpg/800px-Starr_031214-0076_Eucalyptus_globulus.jpg',
            'De Forest & Kim Starr, CC BY 3.0'
        ],
        [
            182.63,
            'Pirul',
            'Schinus molle',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Schinus_molle01.jpg/800px-Schinus_molle01.jpg',
            'De Georges Jansoone - own photo, made at Evora, Portugal, CC BY 2.5'
        ],
        [
            221.03,
            'Palmera de abanico',
            'Washingtonia Robusta',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Washingtonia_robusta.jpg/800px-Washingtonia_robusta.jpg',
            'De en:user:Geographer - en:Image:Washingtonia_robusta.jpg, CC BY 2.5'
        ],
        [
            229.28,
            'Roble sedoso',
            'Grevillea Robusta',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Grevillea_robusta_flowering_in_Gan_Shmuel01.jpg/800px-Grevillea_robusta_flowering_in_Gan_Shmuel01.jpg',
            'De RickP 08:32, 14 April 2006 (UTC) - self-made, based on a 1:50000 map of the area, and the maps on the signs posted at several sites along the route of the project., CC BY 2.5'
        ]
    ];


    //Metodo constructor que inicializa la conversion de toneladas a kg
    public function __construct(Float $footprint)
    {
        $this->co2 = $this->convertCo2($footprint);
    }

    //Metodo para realizar el calculo de la cantidad de arboles de compensacion
    //# de arboles = huella de carbono(kg)/ $capacidad de absorcion(kg)
    //Este resultado se redondea y se guarda en un arreglo para ser mostrado en pantalla 
    public function calculateCompensation()
    {
        $size = sizeof($this->treeData);
        for($i = 0; $i < $size; $i++){
            $result = $this->co2 / $this->treeData[$i][0];
            array_push($this->treeData[$i], number_format($result));

        }

        return [
            'data' => $this->treeData
        ];
    }

    //Metodo que requiere la huella de carbono(toneladas) y realiza la conversion a kg mediante la formula kg = ton * 1000
    //(1ton = 1,000kg)
    public function convertCo2(Float $footprint)
    {
        return $footprint * 1000;
    }
}
