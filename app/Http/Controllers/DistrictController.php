<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function index ()
    {
       $data = District::all();

       return view('pages.districts.index', compact('data'));
    }

    public function edit($id)
    {
        $data = District::findOrFail($id);

        return view('pages.districts.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = District::find($id);
        $data->district_name = $request->district_name;
        $data->save();
        
        return redirect('supadmin/districts')->with('success', 'Cập nhật thành công');
    }

    // Lấy district theo city
    public function get_district_city (Request $request)
    {
        $province_id = $request->id;

        $data = District::where('province_id', $province_id)->get();
       
        return $data;
    }
}
