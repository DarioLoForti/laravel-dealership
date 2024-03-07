<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CarController as CarController;
use App\Http\Controllers\Api\BrandController as BrandController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/cars/{brand_id}', [CarController::class, 'index']);

Route::get('/car/{slug}', [CarController::class, 'show']);

Route::get('/brands', [BrandController::class, 'index']);

Route::get('/brands/{id}', [BrandController::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
