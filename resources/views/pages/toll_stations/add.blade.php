@extends('layouts.admin')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row">
        <div class="col-sm-6 m-auto">
            <form action="{{route('tollstations.store')}}" method="POST">
                @csrf
                <div class="form-group">
                        <label for="name" class="control-label">Tên trạm</label>
                        <input type="text" class="form-control" id="name" name="toll_station_name" placeholder="Trạm thu phí BOT ABCXYZ...">
                </div>
                <div class="form-group">
                    <label for="city_id" class="control-label">Tỉnh</label>
                    <select class="form-control pull-right" id="city">
                        <option value="" class="item_district">-- Chọn tỉnh / thành phố --</option>
                        @foreach($provinces as $item)
                            <option value="{{$item->province_id}}">{{$item->province_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="district_id" class="control-label">Huyện</label>
                    <select name="district_id"  class="form-control pull-right" id="district">
                        <option value="" class="item_district">-- Chọn quận / huyện --</option>
                    </select>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <a href="" class="btn btn-default">Trờ lại</a>
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
			});
		})
	})
</script>
@endsection