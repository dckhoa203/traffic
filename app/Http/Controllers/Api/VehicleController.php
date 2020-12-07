<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Camera;
use App\Models\Vehicle;
use App\Models\CameraVehicle;


class VehicleController extends Controller
{
    // ket noi database
    public function join()
    {
        $data = DB::table('cameras_vehicles')
                ->join('cameras', 'cameras_vehicles.camera_id', '=', 'cameras.camera_id')
                ->join('vehicles', 'cameras_vehicles.vehicle_id', '=', 'vehicles.vehicle_id')
                ->join('vehicle_types', 'vehicles.vehicle_type_id', '=', 'vehicle_types.vehicle_type_id')
                ->join('toll_stations', 'cameras.toll_station_id', '=', 'toll_stations.toll_station_id');

        return $data;
    }

    /**
     * Hien thi tat ca phuong tien
     *
     * @return \Illuminate\Http\Response
     */
    public function show_vehicle()
    {
        $data = $this->join();
        $data = $data->select('vehicles.vehicle_id', 'vehicles.image','cameras_vehicles.time',
                              'vehicle_types.vehicle_type_name', 'cameras.camera_name',
                              'toll_stations.toll_station_name')->get();

        return response()->json($data, 200); 
    }

    /**
     * Tim phuong tien theo id phuong tien
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find_vehicle($id)
    {
        $data = $this->join();
        $data = $data->where('vehicles.vehicle_id', $id)
                     ->select('vehicles.vehicle_id', 'vehicles.image','cameras_vehicles.time',
                              'vehicle_types.vehicle_type_name', 'cameras.camera_name',
                              'toll_stations.toll_station_name')
                     ->get();

        return response()->json($data, 200);
    }

    // Tim phuong tien bang id loai loai xe
    public function find_vehicle_type($id)
    {
        $data = $this->join();
        $data = $data->where('vehicles.vehicle_type_id', $id)
                     ->select('vehicles.vehicle_id', 'vehicles.image','cameras_vehicles.time',
                              'vehicle_types.vehicle_type_name', 'cameras.camera_name',
                              'toll_stations.toll_station_name')
                     ->get();

        return response()->json($data, 200);
    }

    // Tim phuong tien bang id camera
    public function find_vehicle_camera($id)
    {
        $data = $this->join();
        $data = $data->where('cameras_vehicles.camera_id', $id)
                     ->select('vehicles.vehicle_id', 'vehicles.image','cameras_vehicles.time',
                              'vehicle_types.vehicle_type_name', 'cameras.camera_name',
                              'toll_stations.toll_station_name')
                     ->get();

        return response()->json($data, 200);
    }

    public function find_vehicle_camera_type($camera_id, $vehicle_type_id)
    {
        $data = $this->join();
        $data = $data->where([['cameras_vehicles.camera_id', $camera_id],['vehicles.vehicle_type_id', $vehicle_type_id]])
                     ->select('vehicles.vehicle_id', 'vehicles.image','cameras_vehicles.time',
                              'vehicle_types.vehicle_type_name', 'cameras.camera_name',
                              'toll_stations.toll_station_name')
                     ->get();

        return response()->json($data, 200);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert into table vehicles
        $vehicle = Vehicle::create([
            'vehicle_type_id' => $request->vehicle_type_id,
            'image' => null,
        ]);
        
        // insert into table cameras_vehicles
        $camera_vehicle = CameraVehicle::create([
            'vehicle_id' => $vehicle->vehicle_id,
            'camera_id' => (int)$request->camera_id,
            'time' => $request->time,
        ]);

        return response()->json($camera_vehicle, 201);
    }
}
