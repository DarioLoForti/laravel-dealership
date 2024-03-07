<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        return response()->json([
            'success' => true,
            'response' => $brands
        ]);
    }

    public function show($id)
    {
        $brand = Brand::all()->where('id', $id)->first();

        if ($brand) {
            return response()->json([
                'success' => true,
                'response' => $brand
            ]);
        } else {
            return response()->json([
                'success' => false,
                'response' => 'No Brandss found matching query.'
            ]);
        }
    }
}
