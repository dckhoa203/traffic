<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\VehicleType;
use App\Models\Camera;

class VehicleTypeController extends Controller
{
    public function index ()
    {
       $data = VehicleType::all();

       return view('pages.vehicle_type.index', compact('data'));
    }

    public function camera ()
    {
       $data = Camera::all();

       return view('pages.vehicle_type.camera', compact('data'));
    }
}
