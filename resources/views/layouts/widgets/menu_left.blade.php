<aside class="main-sidebar sidebar-dark-primary elevation-4">

     @include('layouts.widgets.logo')

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library --> 
          {{-- @if(Session::get('user')->role == 0) --}}
            {{-- Đơn vị hành chính --}}
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-university"></i>
                <p>
                  Đơn vị hành chính
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
            {{-- Trung tâm --}}
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-school"></i>
                <p>
                  Trung tâm
                </p>
              </a>
            </li>
            {{-- Chi nhánh --}}
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-code-branch"></i>
                <p>
                  Chi nhánh
                </p>
              </a>
            </li>
            {{-- Khóa học --}}
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                <p>
                  Hóa đơn
                </p>
              </a>
            </li>
            {{-- Thể loại --}}
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon nav-icon fas fa-th"></i>
                <p>
                  Thể loại
                </p>
              </a>
            </li>
            
            {{-- Bài viết --}}
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon nav-icon fas fa-blog"></i>
                <p>
                  Bài đăng
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Quản lý bài đăng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tạo bài đăng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Duyệt bài đăng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Quản lý bình luận</p>
                  </a>
                </li>
              </ul>
            </li>
            {{-- Tài khoản --}}
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
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
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>