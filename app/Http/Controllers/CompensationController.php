<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Classes\Tree;
use App\Http\Requests\{TreeRequest, alternativeTransportRequest};
use App\Models\Footprint;
use App\Models\Tree as ModelsTree;
use App\Models\Vehicle;
use App\Models\Visit;

class CompensationController extends Controller
{
    //
    public function treeCalculator(TreeRequest $request){

        if($request->footprint != null){
            $aux = new Tree($request->footprint);
            $trees = ModelsTree::all();
            $data = $aux->calculateCompensation($trees);
            $data = $aux->getFormat($data, 0);
            $cost = $aux->calculateCost($trees, $data);
            $cost = $aux->getFormat($cost, 2);


            return view('treeCalculator', [
                'trees' => $trees,
                'data' => $data,
                'cost' => $cost,
                'footprint' => number_format($request->footprint,2)
            ]);

        }else{

            return view('treeCalculator', [
            ]);
        }

        
    }

    public function transport(alternativeTransportRequest $request){
        
        $visits = Visit::firstOrFail();
        $vehicle = Vehicle::find($request->vehicle);


        if($request->vehicle != null){
            $vehicleCarbonFootprint = $vehicle->carbon_generated * $request->distance;
            $trainCarbonFootprint = $request->distance * 41.15;
            $bicycleCarbonFootprint = $request->distance * 5;

            $trainSavedFootprint = $vehicleCarbonFootprint - $trainCarbonFootprint;
            $bicycleSavedFootprint = $vehicleCarbonFootprint - $bicycleCarbonFootprint;
            $footprintTon = ($vehicleCarbonFootprint / 1000000) * $request->daysPerYear;

            $trainPercent = 4115 / $vehicle->carbon_generated;
            $bicyclePercent = 500 / $vehicle->carbon_generated;

            $visits->total_visits++;
            $visits->save();

            $footprint = new Footprint();
            $footprint->distance = $request->distance;
            $footprint->carbon_footprint = $footprintTon;
            $footprint->change_transport = $request->changeTransport;
            $footprint->vehicle_id = $request->vehicle;
            $footprint->vehicle->times_used++;
            $footprint->vehicle->saveOrFail();
            $footprint->saveOrFail();

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

    public function stats(){

            $vehicles = Vehicle::all();
            $footprints = Footprint::all();

            $data = [];
            $footprintData = [];
            $true = 0;
            $false = 0;
            $avgFootprint = 0;

            foreach($footprints as $foot){
                $avgFootprint += $foot->carbon_footprint;
            }

            $avgFootprint /= $footprints->count();

            foreach($vehicles as $vehicle){
                $data['label'][] = $vehicle->vehicle_name;
                $data['data'][] = $vehicle->times_used;
            }

            foreach($footprints as $footprint){
                if($footprint->change_transport){
                    $true++;
                }else{
                    $false++;
                }
            }
            $footprintData['data'][] = $true;
            $footprintData['data'][] = $false;

            $data['data'] = json_encode($data);
            $footprintData['data'] = json_encode($footprintData);

            return view('statsViews', [
                'data' => $data['data'],
                'footprint' => $footprintData['data'],
                'avgFootprint' => number_format($avgFootprint, 2)
            ]);
        
    }
    
}
