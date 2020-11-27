<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function index ()
    {
       $data = Province::all();

       return view('pages.provinces.index', compact('data'));
    }

    public function edit($id)
    {
        $data = Province::findOrFail($id);

        return view('pages.provinces.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Province::find($id);
        $data->province_name = $request->province_name;
        $data->save();
        
        return redirect('supadmin/provinces')->with('success', 'Cập nhật thành công');
    }
}
