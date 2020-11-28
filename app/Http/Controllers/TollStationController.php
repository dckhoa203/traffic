<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;
use App\Models\TollStation;

class TollStationController extends Controller
{
    public function index ()
    {
       $data = TollStation::all();

       return view('pages.toll_stations.index', compact('data'));
    }

    public function add ()
    {
       $provinces = Province::all();
       $districts = District::all();

       return view('pages.toll_stations.add', compact('provinces', 'districts'));
    }

    public function store (Request $request)
    {
       TollStation::create($request->all());

       return redirect('supadmin/tollstations')->with('success', 'Thêm thành công');
    }

    public function edit($id)
    {
        $data = TollStation::findOrFail($id);
        $provinces = Province::all();
        $districts = District::all();

        return view('pages.toll_stations.edit', compact('data', 'provinces', 'districts'));
    }

    public function update(Request $request, $id)
    {
        $data = TollStation::find($id);
        $data->toll_station_name = $request->toll_station_name;
        $data->district_id = $request->district_id;
        $data->save();
        
        return redirect('supadmin/tollstations')->with('success', 'Cập nhật thành công');
    }

    public function destroy($id)
    {
        $data = TollStation::findOrFail($id);
        $data->delete();
       
        return back()->with('success', 'Xóa thành công!');
    }
}
