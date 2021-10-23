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
            'Sue in az/Trabajo propio/wikipedia'
        ],
        [
            30.564,
            'Fresno',
            'Fraxinus uhdei',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Starr_030405-0078_Fraxinus_uhdei.jpg/800px-Starr_030405-0078_Fraxinus_uhdei.jpg',
            'Forest & Kim Starr/wikipedia'
        ],
        [
            31.101,
            'Mandarino',
            'Citrus Reticulata',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Limonaia_del_Castel_-_DSC02147.JPG/800px-Limonaia_del_Castel_-_DSC02147.JPG',
            'Daderot/Fotografía propia/Dominio público.'
        ],
        [
            38.706,
            'Manglar blanco',
            'Laguncularia Racemosa',
            'http://3.bp.blogspot.com/-6vhcV5bqDbA/UWB73STgcHI/AAAAAAAAAH8/-WJLfT_VyPg/s640/manglares+2.JPG',
            'Autor desconocido/infinitanaturaleza.com'
        ],
        [
            49.345,
            'Naranjo',
            'Citrus × Sinensis',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Laranxeira_Naranjo_GFDL.JPG/1280px-Laranxeira_Naranjo_GFDL.JPG',
            'Luis Miguel Bugallo Sánchez/Trabajo propio/wikipedia'
        ],
        [
            106.933,
            'Limonero',
            'Citrus × Limon',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Citrus_limonum_3.JPG/1280px-Citrus_limonum_3.JPG',
            'Vicenç Salvador Torres Guerola/Trabajo propio/wikipedia'
        ],
        [
            162.257,
            'Eucalipto blanco',
            'Eucalyptus Globulus',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Starr_031214-0076_Eucalyptus_globulus.jpg/800px-Starr_031214-0076_Eucalyptus_globulus.jpg',
            'Forest & Kim Starr/wikipedia'
        ],
        [
            182.63,
            'Pirul',
            'Schinus molle',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Schinus_molle01.jpg/800px-Schinus_molle01.jpg',
            'Georges Jansoone/own photo, made at Evora, Portugal/wikipedia'
        ],
        [
            221.03,
            'Palmera de abanico',
            'Washingtonia Robusta',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Washingtonia_robusta.jpg/800px-Washingtonia_robusta.jpg',
            'Geographer/Image: Washingtonia_robusta.jpg/wikipedia'
        ],
        [
            229.28,
            'Roble sedoso',
            'Grevillea Robusta',
            'https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Grevillea_robusta_flowering_in_Gan_Shmuel01.jpg/800px-Grevillea_robusta_flowering_in_Gan_Shmuel01.jpg',
            'RickP/14/04/2006/self-made,/wikipedia'
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
