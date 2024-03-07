<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Optional;

class OptionalController extends Controller
{
    public function index()
    {
        $optionals = Optional::all();

        return response()->json([
            'success' => true,
            'response' => $optionals
        ]);
    }

    public function show($id)
    {
        $optional = Optional::all()->where('id', $id);

        if ($optional) {
            return response()->json([
                'success' => true,
                'response' => $optional
            ]);
        } else {
            return response()->json([
                'success' => false,
                'response' => 'No optionals found matching query.'
            ]);
        }
    }
}
