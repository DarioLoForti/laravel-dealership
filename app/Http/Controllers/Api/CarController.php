<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index($brand_id)
    {
        if($brand_id != 0){
            $cars = Car::all()->where('brand_id', $brand_id);
        }
        else{
            $cars = Car::all();
        }

        return response()->json([
            'success' => true,
            'response' => $cars
        ]);
    }

    public function show($slug)
    {
        $car = Car::with(['optionals'])->where('slug', $slug)->first();

        if ($car) {
            return response()->json([
                'success' => true,
                'response' => $car
            ]);
        } else {
            return response()->json([
                'success' => false,
                'response' => 'No project found matching query.'
            ]);
        }
    }
}
