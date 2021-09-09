<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Classes\Tree;
use App\Http\Requests\TreeRequest;

class CompensationController extends Controller
{
    //
    public function index(TreeRequest $request){

        if($request->footprint != null){
            $aux = new Tree($request->footprint);
            $data = $aux->calculateCompensation();
        }else{
            $data = null;
        }

        return view('index', [
            'data' => $data
        ]);
    }

    
}
