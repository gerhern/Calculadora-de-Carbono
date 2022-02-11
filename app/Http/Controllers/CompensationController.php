<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Classes\Tree;
use App\Http\Requests\{TreeRequest, alternativeTransportRequest};
use App\Models\Visit;

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
        
        $visits = Visit::first();

        if($request->vehicle != null){
            $vehicleCarbonFootprint = $request->vehicle * $request->distance;
            $trainCarbonFootprint = $request->distance * 41.15;
            $bicycleCarbonFootprint = $request->distance * 5;

            $trainSavedFootprint = $vehicleCarbonFootprint - $trainCarbonFootprint;
            $bicycleSavedFootprint = $vehicleCarbonFootprint - $bicycleCarbonFootprint;
            $footprintTon = ($vehicleCarbonFootprint / 1000000) * $request->daysPerYear;

            $trainPercent = 4115 / $request->vehicle;
            $bicyclePercent = 500 / $request->vehicle;

            $visits->total_visits++;
            $visits->save();


            return view('alternativeTransport', [
                'vehicleCarbonFootprint' => number_format($vehicleCarbonFootprint),
                'footprintTon' => $footprintTon,
                'trainCarbonFootprint' => number_format($trainCarbonFootprint),
                'bicycleCarbonFootprint' => number_format($bicycleCarbonFootprint),

                'trainSavedFootprint' => number_format($trainSavedFootprint),
                'bicycleSavedFootprint' => number_format($bicycleSavedFootprint),
                'distance' => number_format($request->distance),
                'bicyclePercent' => number_format($bicyclePercent, 2),
                'trainPercent' => number_format($trainPercent, 2),
                'daysPerYear' => $request->daysPerYear,
                'visits' => number_format($visits->total_visits)
            ]);

        }else{

            return view('alternativeTransport', [
                'visits' => number_format($visits->total_visits)
            ]);
        }
    }
    
}
