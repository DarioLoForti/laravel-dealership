<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Car;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();

        return response()->json([
            'success' => true,
            'response' => $cars
        ]);
    }

    public function show($slug){
        $car = Car::all()->where('slug', $slug);

        if($car){
            return response()->json([
                'success' => true,
                'response' => $car
            ]);
        }
        else{
            return response()->json([
                'success' => false,
                'response' => 'No project found matching query.'
            ]);
        }
    }
}
