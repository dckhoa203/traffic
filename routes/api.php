<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CommonController;


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
Route::get('vehicletypes', [CommonController::class, 'get_vehicle_types']);
Route::get('tollstations', [CommonController::class, 'get_toll_stations']);