<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Classes\Tree;
use App\Http\Requests\TreeRequest;

class CompensationController extends Controller
{
    //
    public function calculate(TreeRequest $request){

        if($request->footprint != null){
            $aux = new Tree($request->footprint);
            $data = $aux->calculateCompensation();
        }else{
            $data = null;
        }

        return view('tol', [
            'data' => $data,
            'footprint' => number_format($request->footprint,2)
        ]);
    }

    public function transport(Request $request){

        if($request->currentVehicle != null){
            $vehicleCarbonFootprint = $request->currentVehicle * $request->distance;
            $trainCarbonFootprint = $request->distance * 41;
            $bicycleCarbonFootprint = $request->distance * 5;
            $trainSavedFootprint = $vehicleCarbonFootprint - $trainCarbonFootprint;
            $bicycleSavedFootprint = $vehicleCarbonFootprint - $bicycleCarbonFootprint;
            $percent = 500 / $request->currentVehicle;
            return view('transport', [
                'vehicleCarbonFootprint' => number_format($vehicleCarbonFootprint),
                'trainCarbonFootprint' => number_format($trainCarbonFootprint),
                'bicycleCarbonFootprint' => number_format($bicycleCarbonFootprint),

                'trainSavedFootprint' => number_format($trainSavedFootprint),
                'bicycleSavedFootprint' => number_format($bicycleSavedFootprint),
                'distance' => number_format($request->distance),
                'percent' => number_format($percent, 2)
            ]);

        }else{

            return view('transport', [
            ]);
        }
    }
    
}
