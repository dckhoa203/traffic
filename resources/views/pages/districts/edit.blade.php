@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-6 m-auto">
            <form action="{{route('districts.update', $data->district_id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id" class="control-label">ID</label>
                    <input type="text" class="form-control" id="id" name="district_id" value="{{$data->district_id}}" disabled>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Tên tỉnh</label>
                    <input type="text" class="form-control" id="name" name="district_name" value="{{$data->district_name}}">
                </div>
                <div class="form-group">
                    <label for="province_name" class="control-label">Tên tỉnh</label>
                    <input type="text" class="form-control" id="province_name" name="district_name" value="{{$data->provinces->province_name}}" disabled>
                </div>  
                <div class="form-group">
                    <label for="gso_id" class="control-label">Mã địa chính</label>
                    <input type="text" class="form-control" id="gso_id" name="gso_id" value="{{$data->gso_id}}" disabled>
                </div> 
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <a href="{{route('districts.index')}}" class="btn btn-default">Trở về</a>
                </div>
            </form>
        </div>
    </div>    
@endsection