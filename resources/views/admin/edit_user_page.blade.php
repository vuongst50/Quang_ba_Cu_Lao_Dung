<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
        .img_deg{
            height: 100px;
            width: 100px;
        }

        .card .btn_add_acc{
            margin-left:20px;
            margin-top: 20px;
            width: 150px;
        }
    </style> 
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('admin.navbar')

        @include('admin.sidebar')

      <div class="content-wrapper">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color: black;">x</button>
                {{session()->get('message')}}
            </div>
        @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Cập nhật tài khoản</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="home">Trang chủ</a></li>
                  <li class="breadcrumb-item active">Cập nhật tài khoản</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Cập nhật tài khoản người dùng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('edit_user', $post) }}" method="post" class="form-horizontal" enctype="multipart/form-data">

                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Tên</label>
                    <div class="col-sm-10">
                      <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                      id="name" placeholder="Tên" required value="{{$post->name}}">
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>                    
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                      id="email" placeholder="Email" required value="{{$post->email}}">
                       @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Mật khẩu mới</label>
                    <div class="col-sm-10">
                      <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Mật khẩu" required>
                       @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="confirm_password" class="col-sm-2 col-form-label">Nhập lại mật khẩu mới</label>
                    <div class="col-sm-10">
                      <input name="password_confirmation" type="password" class="form-control" id="confirm_password" placeholder="Nhập lại mật khẩu" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Xác nhận</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('admin.categories.script')

  </body>
</html>