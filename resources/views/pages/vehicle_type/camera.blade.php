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
                                            <th>Camera</th>
                                            <th>ip</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td>{{$key}}</td>
                                                <td>{{$item->camera_name}}</td>
                                                <td>{{$item->ip}}</td>
                                                </td>
                                                {{-- @if (Auth::user()->hasRole('Admin')) --}}
                                                    <td>
                                                        <form action="" method="post" class="delete_form">
                                                        <a  href="" data-toggle="toolytip" data-placement="top" title="Chỉnh sửa">&nbsp;&nbsp;&nbsp;<i style="font-size: 15px;" class="fa fa-pencil text-inverse m-r-10 fa-lg"></i></a>
                                                            @csrf
                                                            {{-- <button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-placement="top" title="Xóa"><i style="font-size: 16px;" class="fal fa-trash-alt fa-lg"></i></button> --}}
                                                        </form>
                                                    </td>
                                                {{-- @else --}}
                                                    {{-- <td></td> --}}
                                                {{-- @endif --}}
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
                if(confirm('Bạn có muốn xóa không?'))
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