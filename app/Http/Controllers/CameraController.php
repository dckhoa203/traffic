<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camera;
use App\Models\District;
use App\Models\Province;
use App\Models\TollStation;

class CameraController extends Controller
{
    public function index ()
    {
       $data = Camera::all();

       return view('pages.cameras.index', compact('data'));
    }

    public function add ()
    {
       $provinces = Province::all();
       $districts = District::all();
       $stations = TollStation::all();

       return view('pages.cameras.add', compact('provinces', 'districts', 'stations'));
    }

    public function store ()
    {
       $data = Camera::all();

       return view('pages.cameras.index', compact('data'));
    }

    public function edit($id)
    {
        $data = Camera::findOrFail($id);

        return view('pages.cameras.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Camera::find($id);
        $data->camera_name = $request->camera_name;
        $data->coordinate_x = $request->coordinate_x;
        $data->coordinate_y = $request->coordinate_y;
        $data->street_id = $request->street_id;
        $data->save();
        
        return redirect('supadmin/cameras')->with('success', 'Cập nhật thành công');
    }
}
