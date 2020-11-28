@extends('layouts.admin')

@section('content')
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row">
        <div class="col-sm-6 m-auto">
            <form action="{{route('tollstations.update', $data->toll_station_id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id" class="control-label">ID</label>
                <input type="text" class="form-control" id="id" name="toll_station_id" placeholder="" value="{{$data->toll_station_id}}" disabled>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Tên trạm thu</label>
                <input type="text" class="form-control" id="name" name="toll_station_name" placeholder="" value="{{$data->toll_station_name}}">
                </div>
                <div class="form-group">
                  <label for="city_id" class="control-label">Tỉnh</label>
                  <select name="city_id"  class="form-control pull-right" id="city">
                      @foreach($provinces as $item)
                          <option value="{{$item->province_id}}" @if($item->province_id == $data->districts->provinces->province_id) selected @endif>{{$item->province_name}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for="district_id" class="control-label">Huyện</label>
                  <select name="district_id"  class="form-control pull-right" id="district">
                    @foreach($districts as $item)
                        <option class="item_district" name="x" value="{{$item->district_id}}" @if($item->district_id == $data->district_id) selected @endif>{{$item->district_name}}</option>
                    @endforeach
                  </select>
              </div>

                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <a href="{{route('tollstations.index')}}" class="btn btn-default">Trờ lại</a>
                    </div>
            </form>
        </div>
    </div>    
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#city').on('change',function(){
        const city_id = $('#city')[0].value;
        // alert(city_id);
        $.ajax({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            type: 'post',
            url: "{{route('district.get_district_city')}}",
                    data:{id: city_id},
            success: function(data){
                    // alert(data);
                    $(".item_district").remove();
                    data.forEach( (item,index)  => {
                    $('#district').append('<option class="item_district" value='+item.district_id+'>'+item.district_name+'</option>')
                })	
            },
            error: function(data) {
            // alert(JSON.stringify(data));
                alert('error');
                }
            })
        })
	})
</script>
@endsection