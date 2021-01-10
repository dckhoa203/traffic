<aside class="main-sidebar sidebar-dark-primary elevation-4">

     @include('layouts.widgets.logo')

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library --> 
          @if(Session::get('user')->type == 0)
            {{-- Đơn vị hành chính --}}
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-code-branch"></i>
                <p>
                  Hành chính
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('provinces.index')}}" class="nav-link">
                    <i class="nav-icon far fa-circle nav-icon"></i>
                    <p>Tỉnh</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('districts.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Huyện</p>
                  </a>
                </li>
              </ul>
            </li>
            {{-- Tài khoản --}}
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>
                  Tài khoản
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tất cả</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cộng tác viên</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thành viên</p>
                  </a>
                </li>
              </ul>
            </li>
            {{-- Chi nhánh --}}
            <li class="nav-item">
              <a href="{{route('tollstations.index')}}" class="nav-link">
                <i class="nav-icon fas fa-warehouse"></i>
                <p>
                  Trạm thu
                </p>
              </a>
            </li>
            {{-- Trung tâm --}}
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-video"></i>
                <p>
                  Cameras
                </p>
              </a>
            </li>
            {{-- Khóa học --}}
            
            {{-- Thể loại --}}
            <li class="nav-item">
              <a href="{{route('vehicletypes')}}" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  Loại phương tiện
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('vehicles')}}" class="nav-link">
                <i class="nav-icon fas fa-car-alt"></i>
                <p>
                  Phương tiện
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('statcistis.day')}}" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  Thống kê ngày
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('statistics.week')}}" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  thống kê tuần
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('statistics.month')}}" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  thống kê tháng
                </p>
              </a>
            </li>
            @endif       
            @if(Session::get('user')->type == 1)
            <li class="nav-item">
              <a href="{{route('vehicles')}}" class="nav-link">
                <i class="nav-icon fas fa-car-alt"></i>
                <p>
                  Phương tiện
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('statcistis.day')}}" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  Thống kê ngày
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('statistics.week')}}" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  thống kê tuần
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('statistics.month')}}" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  thống kê tháng
                </p>
              </a>
            </li>
            @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>