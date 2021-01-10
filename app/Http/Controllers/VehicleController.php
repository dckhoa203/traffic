<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function join()
    {
        $data = DB::table('cameras_vehicles')
                ->join('cameras', 'cameras_vehicles.camera_id', '=', 'cameras.camera_id')
                ->join('vehicles', 'cameras_vehicles.vehicle_id', '=', 'vehicles.vehicle_id')
                ->join('vehicle_types', 'vehicles.vehicle_type_id', '=', 'vehicle_types.vehicle_type_id')
                ->join('toll_stations', 'cameras.toll_station_id', '=', 'toll_stations.toll_station_id');

        return $data;
    }

    public function index ()
    {
        $data = $this->join()->get();
        // dd($data);

        return view('pages.vehicles.index', compact('data'));
    }
}
