{{-- <!DOCTYPE html>
<html>
@include('layouts.widgets.head')
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">ĐĂNG NHẬP</p>

      <form action="{{route('postlogin')}}" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ghi nhớ
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <input type="submit" class="btn btn-primary btn-block" value="Đăng nhập">
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

@include('layouts.widgets.js')

</body>
</html> --}}


<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('postlogin')}}" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="username" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="password" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

