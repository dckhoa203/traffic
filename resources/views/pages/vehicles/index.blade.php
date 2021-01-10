@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert" id="showMessage">
            <p style="margin: 0px;">{{$message}}</p>
        </div>
    @endif
        <div class="container-fluid">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Trạm thu phí</th>
                                            <th>Camera</th>
                                            <th>Loại phương tiện</th>
                                            <th>Thời gian</th>
                                            <th>Ảnh</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td>{{$key}}</td>
                                                <td>{{$item->toll_station_name}}</td>
                                                <td>{{$item->camera_name}}</td>
                                                <td>{{$item->vehicle_type_name}}</td>
                                                <td>{{$item->time}}</td>
                                                <td>{{$item->image}}</td>
                                                <td>
                                                    <form action="#" method="post" class="delete_form">
                                                    {{-- <a  href="{{route('districts.edit', $item->district_id)}}" data-toggle="toolytip" data-placement="top" title="Chỉnh sửa">&nbsp;&nbsp;&nbsp;<i style="font-size: 15px;" class="fa fa-pencil text-inverse m-r-10 fa-lg"></i></a> --}}
                                                        @csrf
                                                        {{-- <button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-placement="top" title="Xóa"><i class="fal fa-trash-alt fa-lg"></i></button> --}}
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                {{-- end div col-sm-6 --}}
                </div> 
            {{-- end div row --}}
            </div>
        {{-- end div white-box --}}
        </div>
    {{-- end div container-fluid --}}
</div>
    {{-- end div page-wrapper --}}
@endsection
    
@section('script')    
    <script>
        // Sắp xếp
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        // an thong bao
        $(document).ready(function(){
            setTimeout(function(){
                $('#showMessage').hide()            
            },1000)
        });
        // Họp thoại cảnh báo xóa
        $(document).ready(function () {
            $('.delete_form').on('submit',function(){
                if(confirm('Bạn có muốn xóa quận/huyện này không?'))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            });
        });
    </script>
@endsection

@section('script')
<script>
$(function () 
    $('[data-toggle="tooltip"]').tooltip();
);
</script>
@endsection