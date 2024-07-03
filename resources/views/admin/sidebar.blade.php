  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('home')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{$user->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- Trang chủ -->
          <li class="nav-item">
            <a href="{{url('home')}}" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Trang chủ
              </p>
            </a>
          </li>

          <!-- Tất cả bài viết -->
          <li class="nav-item">
            <a href="{{url('show_post')}}" class="nav-link">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Tất cả bài viết
              </p>
            </a>
          </li>  

          <!-- Thêm bài viết -->
          <li class="nav-item">
            <a href="{{url('post_page')}}" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Thêm bài viết
              </p>
            </a>
          </li>

          <!-- Thêm nơi ở -->
          <li class="nav-item">
            <a href="{{url('add_location_page')}}" class="nav-link">
              <i class="nav-icon fa-solid fa-house-chimney-medical"></i>
              <p>
                Thêm nơi ở
              </p>
            </a>
          </li>
         
          <!-- Danh mục -->
          @if (Auth::check() && Auth::user()->usertype == 'admin')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Danh mục
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <!-- Tin tức và sự kiện -->
              <li class="nav-item">
                <a href="{{url('show_new_post')}}" class="nav-link">
                  <i class="fas fa-newspaper nav-icon"></i>
                  <p>Tin tức & Sự kiện</p>
                </a>
              </li>

              <!-- Điểm đến -->
              <li class="nav-item">
                <a href="show_destination_post" class="nav-link">
                  <i class="fa fa-map nav-icon"></i>
                  <p>Điểm đến</p>
                </a>
              </li>

              <!-- Ẩm thực -->
              <li class="nav-item">
                <a href="show_food_post" class="nav-link">
                  <i class="fa fa-cutlery nav-icon"></i>
                  <p>Ẩm thực</p>
                </a>
              </li>

              <!-- Nghỉ dưỡng -->
              <li class="nav-item">
                <a href="show_resort_post" class="nav-link">
                  <i class="far fa-building nav-icon"></i>
                  <p>Nghỉ dưỡng</p>
                </a>
              </li>

              <!-- Other -->
              <li class="nav-item">
                <a href="other" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Other</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-folder-open"></i>
              <p>
                Quản lý bài viết
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <!-- Duyệt bài viết -->
              <li class="nav-item">
                <a href="{{url('pending_post')}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file-pen"></i>
                  <p>
                    Duyệt bài viết
                  </p>
                </a>
              </li> 

              <!-- Bài viết đã duyệt -->
              <li class="nav-item">
                <a href="{{url('accepted_posts')}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file-circle-check"></i>
                  <p>
                    Bài viết đã duyệt
                  </p>
                </a>
              </li>    

              <!-- Bài viết đã từ chối -->
              <li class="nav-item">
                <a href="{{url('rejected_posts')}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file-circle-xmark"></i>
                  <p>
                    Bài viết bị từ chối
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('manage_user')}}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Quản lý người dùng
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