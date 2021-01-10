<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\VehicleType;

class VehicleTypeController extends Controller
{
    public function index ()
    {
       $data = VehicleType::all();

       return view('pages.vehicles.index', compact('data'));
    }
}
