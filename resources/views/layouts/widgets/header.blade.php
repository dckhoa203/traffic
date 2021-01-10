<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <a class="btn" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> ĐĂNG XUẤT</span></a>
      {{-- <script>
        function clock(){
            //Khởi tạo đối tượng timer sử dụng Date Object
            var timer = new Date();
            //Gọi các phương thức của đối tượng timer
            var hour = timer.getHours();  //Lấy giờ hiện tại (giá trị từ 0 - 23)
            var minute = timer.getMinutes();  //Lấy phút hiện tại
            var second = timer.getSeconds();  //Lấy giây  hiện tại
            //Thêm ký tự 0 đằng trước nếu giờ, phút, giây < 10 với câu lệnh điều khiển if
            if(hour < 10) {
                hour = "0" + hour;
            }
            if(minute < 10) {
                minute = "0" + minute;
            }
            if(second < 10) {
                second = "0" + second;
            }
            //Hiện thị thời gian lên thẻ div id="clock" với phương thức innerHTML
            document.getElementById("demo").innerHTML = hour + ":" + minute + ":" + second;
        }
        //Thực hiện hàm clock theo chu kỳ 1 giây
        setInterval("clock()",1000);
      </script> --}}
    </ul>
  </nav>