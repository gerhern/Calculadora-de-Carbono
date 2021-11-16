<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Classes\Tree;
use App\Http\Requests\{TreeRequest, alternativeTransportRequest};

class CompensationController extends Controller
{
    //
    public function treeCalculator(TreeRequest $request){

        if($request->footprint != null){
            $aux = new Tree($request->footprint);
            $data = $aux->calculateCompensation();

            return view('treeCalculator', [
                'data' => $data,
                'footprint' => number_format($request->footprint,2)
            ]);

        }else{

            return view('treeCalculator', [
            ]);
        }

        
    }

    public function transport(alternativeTransportRequest $request){

        if($request->vehicle != null){
            $vehicleCarbonFootprint = $request->vehicle * $request->distance;
            $trainCarbonFootprint = $request->distance * 41.15;
            $bicycleCarbonFootprint = $request->distance * 5;

            $trainSavedFootprint = $vehicleCarbonFootprint - $trainCarbonFootprint;
            $bicycleSavedFootprint = $vehicleCarbonFootprint - $bicycleCarbonFootprint;
            $footprintTon = ($vehicleCarbonFootprint / 1000000) * 200;

            $trainPercent = 4115 / $request->vehicle;
            $bicyclePercent = 500 / $request->vehicle;

            return view('alternativeTransport', [
                'vehicleCarbonFootprint' => number_format($vehicleCarbonFootprint),
                'footprintTon' => $footprintTon,
                'trainCarbonFootprint' => number_format($trainCarbonFootprint),
                'bicycleCarbonFootprint' => number_format($bicycleCarbonFootprint),

                'trainSavedFootprint' => number_format($trainSavedFootprint),
                'bicycleSavedFootprint' => number_format($bicycleSavedFootprint),
                'distance' => number_format($request->distance),
                'bicyclePercent' => number_format($bicyclePercent, 2),
                'trainPercent' => number_format($trainPercent, 2)
            ]);

        }else{

            return view('alternativeTransport', [
            ]);
        }
    }
    
}
