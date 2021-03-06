<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;
use App\Models\TollStation;
use App\Models\VehicleType;
use App\Models\Camera;

class CommonController extends Controller
{
    public function get_provinces()
    {
        $data =Province::all();
        
        return response()->json($data, 200);
    }

    public function get_districts()
    {
        $data = District::all();
        
        return response()->json($data, 200);
    }

    public function get_vehicle_types()
    {
        $data = VehicleType::all();
        
        return response()->json($data, 200);
    }

    public function get_toll_stations()
    {
        $data = TollStation::all();
        
        return response()->json($data, 200);
    }

    public function get_cameras()
    {
        $data = Camera::all();
        
        return response()->json($data, 200);
    }

    public function find_toll_stationds($id)
    {
        $data = TollStation::findOrFail($id);
        
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $data = VehicleType::create($request->all());

        return response()->json($data, 201);
    }
}
