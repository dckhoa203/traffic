<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CommonController;
use App\Http\Controllers\Api\VehicleController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('provinces', [CommonController::class, 'get_provinces']);
Route::get('districts', [CommonController::class, 'get_districts']);
Route::get('tollstations', [CommonController::class, 'get_toll_stations']);

Route::get('vehicles', [VehicleController::class, 'show_vehicle']);
Route::get('vehicles/{id}', [VehicleController::class, 'find_vehicle']);
Route::get('vehicles-type/{id}', [VehicleController::class, 'find_vehicle_type']);
Route::get('vehicles-camera/{id}', [VehicleController::class, 'find_vehicle_camera']);
Route::get('vehicles-camera/{id}/{type_id}', [VehicleController::class, 'find_vehicle_camera_type']);
Route::post('vehicles', [VehicleController::class, 'store']);    